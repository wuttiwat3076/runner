<?php include "header.php"; ?>
<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
<?PHP 


if(@$_GET['del']!=""){

include "config.inc.php"; 
$sql_del= "DELETE FROM tbl_register_run WHERE tbl_register_run.id_register_run = $_GET[del]";
$conn->query($sql_del); 

            echo "<script type='text/javascript'>";
			//echo  "alert('[บันทึกข้อมูสำเร็จ]');";
		    echo "window.location='register_run_list.php';";
			echo "</script>";
}
?>

<div class="py-5 bg-light" style="font-family: 'Kanit', sans-serif;">
    <div class="container">
        <div class="row">



            <div class="col-lg-12">
                <div class="p-4 mb-3 bg-white">
                    - ข้อมูลการสมัคร

                    <table width="100%" class="table table-striped">
                        <thead>
                            <tr>
                                <th width="12%" scope="col">วันที่</th>
                                <th width="21%" scope="col">งานวิ่ง</th>
                                <th width="14%" scope="col">ประเภท</th>
                                <th width="23%" scope="col">สถานะ / หมายเลข </th>
                                <th width="12%" scope="col">ชำระเงิน</th>
                                <th width="18%" scope="col">ยกเลิก</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?PHP 
$id_user=@$_SESSION['id_user'];
include "config.inc.php"; 
$sql_register_run="SELECT * FROM tbl_register_run , tbl_event_type , tbl_running_event ,tbl_type_running where
 tbl_register_run.id_event_type=tbl_event_type.id_event_type 
 and tbl_event_type.id_running_event=tbl_running_event.id_running_event
 and tbl_event_type.id_type_running=tbl_type_running.id_type_running
 and tbl_register_run.id_user=$id_user"; 
$query_register_run = $conn->query($sql_register_run); 
$i=0;
while($result_register_run = $query_register_run->fetch_assoc()) 
{ $i++;


?>

                            <tr>
                                <td><?php echo $result_register_run['date_running_event']?></td>
                                <td><?php echo $result_register_run['name_running_event'];?></td>
                                <td><?php echo $result_register_run['name_type_running'];?>
                                    <?php echo $result_register_run['distance_type_running'];?> K</td>
                                <td>

                                    <?php 
					   
					 $status = $result_register_run['status_register_run'];
					
					switch ($status) {
						case "1":
							echo "รอชำระเงิน / ";
							echo $result_register_run['entry_fee']; 
							echo " บาท";
							break;
						case "2":
							echo "รอการยืนยัน";
							break;
						case "3":
							echo "ชำระเงินแล้ว / ";
							echo  $result_register_run['number_register_run'];
							break;
						default:
							echo "รอชำระเงิน";
				                      	}
		
					   ?>



                                </td>
                                <td>
                                    <?php if($status==1){?>
                                    <a href="payment_add.php?id_register_run=<?=$result_register_run['id_register_run'];?>"
                                        class="btn btn-info">ชำระเงิน</a>
                                    <?php }?>
                                </td>
                                <td>

                                    <?php if($status==1){?>
                                    <a href="?del=<?=$result_register_run['id_register_run'];?>" class="btn btn-danger"
                                        onClick="return confirm('กรุณายืนยันการยกเลิกอีกครั้ง !!!')">ยกเลิก</a>
                                    <?php }?>

                                </td>

                            </tr>

                            <?php }?>


                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
</div>
</div>
<?php include"footer.php";?>