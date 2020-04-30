<?php include "header.php"; ?>
<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
<?PHP 


$id_register_run=@$_GET['id_register_run'];
include "config.inc.php"; 
 $sql_register_run="SELECT * FROM tbl_register_run , tbl_event_type , tbl_running_event ,tbl_type_running where
 tbl_register_run.id_event_type=tbl_event_type.id_event_type 
 and tbl_event_type.id_running_event=tbl_running_event.id_running_event
 and tbl_event_type.id_type_running=tbl_type_running.id_type_running
 and tbl_register_run.id_register_run='$id_register_run'"; 
$query_register_run = $conn->query($sql_register_run); 
$result_register_run = $query_register_run->fetch_assoc();
?>

<div class="py-5 bg-light" style="font-family: 'Kanit', sans-serif;
">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-lg-12 mb-5">


                <form role="form" method="post" action="payment_add_q.php" class="p-5 bg-white"
                    enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="col-sm-7">
                            <div class="row form-group">
                                <div class="col-md-12 mb-12 mb-md-0">
                                    <label class="font-weight-bold" for="fullname">
                                        ชำระเงิน งาน : <?php echo $result_register_run['name_running_event'];?>

                                        &nbsp;ประเภท : <?php echo $result_register_run['name_type_running'];?>
                                        <?php echo $result_register_run['distance_type_running'];?> K

                                        <input name="id_register_run" type="hidden"
                                            value="<?php echo $result_register_run['id_register_run'];?>" />

                                    </label>

                                </div>
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">ธนาคาร</label>

                                <select name="id_bank" class="form-control" required>
                                    <option value=""> --- เลือกธนาคาร --- </option>

                                    <?php 
$id_running_event=$result_register_run['id_running_event'];
include"config.inc.php";
$sql_bank = "SELECT * FROM tbl_bank  where id_running_event=$id_running_event ORDER BY id_bank ASC"; 
$query_bank = $conn->query($sql_bank); 
while($result_bank = $query_bank->fetch_assoc()){
?>
                                    <option value="<?=$result_bank['id_bank'];?>">
                                        <?=$result_bank['name_bank'];?> <?=$result_bank['account_number_bank'];?>
                                    </option>

                                    <?php }?>
                                </select>
                            </div>





                            <div class="form-group">
                                <label for="exampleInputEmail1">จำนวน</label>
                                <input type="number" name="amount_payment" class="form-control"
                                    value="<?php echo $result_register_run['entry_fee'];?>" id="exampleInputEmail1"
                                    required>
                            </div>



                            <div class="form-group">
                                <label for="exampleInputEmail1">วันที่จ่าย</label>
                                <input type="date" name="date_payment" class="form-control" id="exampleInputEmail1"
                                    placeholder="วันที่จ่ายเงิน" required>
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">เวลา</label>
                                <input type="time" name="time_payment" class="form-control" id="exampleInputEmail1"
                                    placeholder="เวลาที่จ่ายเงิน" required>
                            </div>




                            <div class="form-group">
                                <label for="exampleInputEmail1">ไฟล์รูปสลิป</label>
                                <input type="file" name="slip_payment" class="form-control" id="exampleInputEmail1"
                                    placeholder="สลิปจ่ายเงิน" required>
                            </div>




                            <div class="form-group">
                                <label for="exampleInputEmail1">Size เสื้อ</label>

                                <select name="size_register_run" class="form-control" required>
                                    <option value=""> --- เลือกSize เสื้อ --- </option>
                                    <option value="S"> S </option>
                                    <option value="M"> M </option>
                                    <option value="F"> F </option>
                                    <option value="L"> L </option>
                                    <option value="XL"> XL </option>
                                    <option value="2XL"> 2XL </option>
                                    <option value="3XL"> 3XL </option>
                                </select>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">บันทึกการชำระเงิน</button>
                     </div> 
                  </div>
                </form>

            </div>


        </div>
    </div>
</div>
<?php include"footer.php";?>