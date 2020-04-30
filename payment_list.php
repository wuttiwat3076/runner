<?php include"header.php";?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ข้อมูลการชำระเงิน </h1>






                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item active">ข้อมูลการชำระเงิน</li>
                        <li class="breadcrumb-item"><a href="javascript:history.back(1)">ย้อนกลับ</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">ข้อมูลการชำระเงิน</h3>

                <div class="card-tools">

                </div>
            </div>

            <div class="card-body">



                <table id="example1" class="table table-bordered table-striped">
                    <thead>

                        <tr>
                            <th>ลำดับ</th>
                            <th>รายการงานวิ่ง</th>
                            <th>ธนาคาร</th>
                            <th>ชื่อ / วันที่ / เวลา </th>
                            <th>สลิปการโอน</th>
                            <th>จำนวนเงิน </th>

                            
                            <th>
                                <div align="center">ยืนยัน</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
include"config.inc.php";
$i=0;
$id_event_type=@$_GET['id_event_type'];

if(isset($_SESSION['id_user'])){
$id_user=$_SESSION['id_user'];
}else{
$id_user="";
}


$sql_register_run = "SELECT * FROM tbl_payment , tbl_register_run , tbl_event_type , tbl_running_event , tbl_bank ,tbl_user where 
tbl_payment.id_register_run=tbl_register_run.id_register_run  and
tbl_register_run.id_event_type=tbl_event_type.id_event_type  and 
tbl_event_type.id_running_event=tbl_running_event.id_running_event and
tbl_payment.id_bank=tbl_bank.id_bank and
tbl_register_run.id_user=tbl_user.id_user and

tbl_running_event.id_user=$id_user"; 
$query_register_run = $conn->query($sql_register_run); 
while($result_register_run = $query_register_run->fetch_assoc()){
$i++;

?>

                        <tr>
                            <td><?php echo $i;?></td>
                            <td><?php echo $result_register_run['name_running_event'];?></td>
                            <td><?php echo $result_register_run['name_bank'];?>/
                                <?php echo $result_register_run['account_number_bank'];?></td>
                            <td><?php echo $result_register_run['name_user'];?>  <?php echo $result_register_run['last_user'];?> <br>
                                <?php echo $result_register_run['date_payment'];?><br>
                                <?php echo $result_register_run['time_payment'];?></td>
                               <td> <img
                        src="slip_payment/<?=$result_register_run['slip_payment'];?>" width="170" height="170" 
                        alt="Image" class="img-fluid"></td>
                            <td> <a href="slip_payment/<?php echo $result_register_run['slip_payment'];?>"
                                    target="_blank"><?php echo $result_register_run['entry_fee'];?></a></td>
                            <td>

                                <div align="center">
                                    <?php if($result_register_run['status_register_run']==2){?>
                                    <a href="payment_app.php?id_register_run=<?php echo $result_register_run['id_register_run'];?>"
                                        class="btn btn-success"> ยืนยันชำระเงิน </a>
                                    <?php }else{?>
                                    <a href="#" class="btn btn-secondary"> ยืนยันสำเร็จ</a>
                                    <?php }?>


                                </div>

                            </td>
                        </tr>
                        <?php }?>

                    </tbody>

                </table>













            </div>
            <!-- /.card-body -->


            <div class="card-footer">

            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include "footer.php";?>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->




<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
$(function() {
    $("#example1").DataTable();
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
    });
});
</script>
</body>

</html>