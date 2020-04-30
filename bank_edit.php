<?php include"header.php";?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>แก้ไขข้อมูลธนาคาร

                        <a href="javascript:history.back(1)" class="btn btn-primary"> ย้อนกลับ</a>


                    </h1>

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="bank_list.php">ข้อมูลธนาคาร</a></li>
                        <li class="breadcrumb-item active">แก้ไขข้อมูลธนาคาร </li>
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

                <?php 
include"config.inc.php";
$sql_bank = "SELECT * FROM tbl_bank where id_bank=$_GET[id_bank]"; 
$query_bank = $conn->query($sql_bank); 
$result_bank = $query_bank->fetch_assoc();
?>



                <form role="form" method="post" action="bank_edit_q.php">
                    <div class="card-body">


                        <div class="form-group">
                            <label for="exampleInputEmail1">งานวิ่ง </label>
                            <input type="text" name="id_running_event" class="form-control" id="exampleInputEmail1"
                                value="<?=$result_bank['id_running_event'];?>" placeholder="งานวิ่ง" required>

                            <input type="hidden" name="id_bank" value="<?=$result_bank['id_bank'];?>" />
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">ชื่อธนาคาร </label>
                            <input type="text" name="name_bank" class="form-control" id="exampleInputEmail1"
                                value="<?=$result_bank['name_bank'];?>" placeholder="ชื่อธนาคาร	" required>
                        </div>



                        <div class="form-group">
                            <label for="exampleInputEmail1">เลขบัญชีธนาคาร</label>
                            <input type="text" name="account_number_bank" class="form-control" id="exampleInputEmail1"
                                value="<?=$result_bank['account_number_bank'];?>" placeholder="เลขบัญชีธนาคาร" required>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">สาขาธนาคาร </label>
                            <input type="text" name="branch_bank" class="form-control" id="exampleInputEmail1"
                                value="<?=$result_bank['branch_bank'];?>" placeholder="สาขาธนาคาร" required>
                        </div>





                    </div>
                    <!-- /.card-body -->

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">อัพเดท</button>
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