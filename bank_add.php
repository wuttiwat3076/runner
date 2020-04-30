<?php include"header.php";?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>เพิ่มข้อมูลธนาคาร

                        <a href="javascript:history.back(1)" class="btn btn-primary"> ย้อนกลับ</a>


                    </h1>

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="bank_list.php">ข้อมูลธนาคาร</a></li>
                        <li class="breadcrumb-item active">เพิ่มข้อมูลธนาคาร </li>
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
                <h3 class="card-title">ข้อมูลธนาคาร</h3>

                <div class="card-tools">

                </div>
            </div>

            <div class="card-body">
                <div class="col-sm-10">





                    <form role="form" method="post" action="bank_add_q.php">
                        <div class="card-body">


                            <div class="form-group">
                                <label for="exampleInputEmail1">งานวิ่ง </label>

                                <select name="id_running_event" class="form-control" required>
                                    <option value=""> --- งานวิ่ง --- </option>

                                    <?php 
include"config.inc.php";
$i=0;
if(isset($_SESSION['level_user'])){
$level_user=$_SESSION['level_user'];
}else{
$level_user="";
}
if(isset($_SESSION['id_user'])){
$id_user=$_SESSION['id_user'];
}else{
$id_user="";
}
if($level_user==1){
 $sql_running_event = "SELECT * FROM tbl_running_event , tbl_user where tbl_running_event.id_user=tbl_user.id_user  ORDER BY tbl_running_event.id_running_event ASC"; 
 
 }else{
  $sql_running_event = "SELECT * FROM tbl_running_event , tbl_user where tbl_running_event.id_user=tbl_user.id_user  and  tbl_running_event.id_user=$id_user  ORDER BY tbl_running_event.id_running_event ASC"; 
 }
$query_running_event = $conn->query($sql_running_event); 
while($result_running_event = $query_running_event->fetch_assoc()){
$i++;
?> <option value="<?=$result_running_event['id_running_event'];?>">
                                        <?=$result_running_event['name_running_event'];?>
                                    </option>

                                    <?php }?>
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">ชื่อธนาคาร </label>
                                <input type="text" name="name_bank" class="form-control" id="exampleInputEmail1"
                                    placeholder="ชื่อธนาคาร	" required>
                            </div>



                            <div class="form-group">
                                <label for="exampleInputEmail1">เลขบัญชีธนาคาร</label>
                                <input type="text" name="account_number_bank" class="form-control"
                                    id="exampleInputEmail1" placeholder="เลขบัญชีธนาคาร" required>
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">สาขาธนาคาร </label>
                                <input type="text" name="branch_bank" class="form-control" id="exampleInputEmail1"
                                    placeholder="สาขาธนาคาร" required>
                            </div>








                        </div>
                        <!-- /.card-body -->

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">บันทึก</button>
                        </div>
                    </form>










                </div>
                <!-- /.card-body -->


                
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