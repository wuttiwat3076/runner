<?php include "header.php";
include"config.inc.php";
 ?>
<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">



<?php 
include"config.inc.php";
$sql_running_event = "SELECT * FROM tbl_running_event , tbl_faculty where   tbl_running_event.id_faculty=tbl_faculty.id_faculty  and tbl_running_event.id_running_event=$_GET[id_running_event]"; 
$query_running_event = $conn->query($sql_running_event); 
$result_running_event = $query_running_event->fetch_assoc();
?>



<div class="site-section" style="font-family: 'Kanit', sans-serif;
">
    <div class="container">
        <div class="row">


            <div class="col-lg-6">

                <p class="mb-5"><img
                        src="blackoffice/photo_running_event/<?=$result_running_event['photo_running_event'];?>"  
                        alt="Image" class="img-fluid"></p>
                <p class="mb-5"><img
                        src="blackoffice/shirtphoto_running_event/<?=$result_running_event['shirtphoto_running_event'];?>"
                        alt="Image" class="img-fluid"></p>
                <p class="mb-5"><img
                        src="blackoffice/map_running_event/<?=$result_running_event['map_running_event'];?>" alt="Image"
                        class="img-fluid"></p>



            </div>




            <div class="col-lg-6 ml-auto">
                <h2 class="site-section-heading mb-3"><?php  echo $result_running_event['name_running_event'];?> </h2>
                <h5> คณะ <?php  echo $result_running_event['name_faculty'];?>
                    <span class="mb-3 d-block post-date"><a
                            href="#"><?php echo $result_running_event['date_running_event'];?></a></span>
                </h5>
                <p>
                    <?php 
			    echo nl2br($result_running_event['detail_running_event']);
				
			  ?>
                </p>



                <table id="example1" class="table table-bordered table-striped">
                    <thead>

                        <tr>

                            <th>ประเภท</th>
                            <th>จำนวน</th>
                            <th>ค่าสมัคร</th>

                            <th>
                                <div align="center">สมัคร</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
include"config.inc.php";
$i=0;
$sql_event_type = "SELECT * FROM tbl_event_type , tbl_type_running   where tbl_event_type.id_type_running=tbl_type_running.id_type_running  and  tbl_event_type.id_running_event=$_GET[id_running_event] "; 
$query_event_type = $conn->query($sql_event_type); 
while($result_event_type = $query_event_type->fetch_assoc()){
$i++;
?>

                        <tr>

                            <td><?=$result_event_type['name_type_running'];?> ระยะทาง
                                <?=$result_event_type['distance_type_running'];?> กม.</td>
                            <td><?=$result_event_type['number_received'];?></td>
                            <td><?=$result_event_type['entry_fee'];?></td>
                            <td>

                                <div align="center">
                                    <a href="register_run.php?id_event_type=<?php echo $result_event_type['id_event_type'];?>"
                                        class="btn btn-outline-primary py-2 px-4"> สมัคร </a>
                                </div>
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





<?php include"footer.php";?>