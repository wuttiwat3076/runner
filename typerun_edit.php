<?php include"header.php";?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>แก้ไขข้อมูลประเภทการวิ่ง

                        <a href="javascript:history.back(1)" class="btn btn-primary"> ย้อนกลับ</a>


                    </h1>

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="bank_list.php">ข้อมูลประเภทการวิ่ง</a></li>
                        <li class="breadcrumb-item active">แก้ไขข้อมูลประเภทการวิ่ง</li>
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
                <h3 class="card-title">ข้อมูลประเภทการวิ่ง</h3>

                <div class="card-tools">

                </div>
            </div>

            <div class="card-body">
                <?php 
include"config.inc.php";
$sql_type_running = "SELECT * FROM tbl_type_running where id_type_running=$_GET[id_type_running]"; 
$query_type_running = $conn->query($sql_type_running); 
$result_type_running = $query_type_running->fetch_assoc();
?>




                <form role="form" method="post" action="typerun_edit_q.php">
                    <div class="card-body">




                        <div class="form-group">
                            <label for="exampleInputEmail1">ชื่อประเภท</label>
                            <input type="text" name="name_type_running" class="form-control" id="exampleInputEmail1"
                                value="<?=$result_type_running['name_type_running'];?>" placeholder="ชื่อประเภทการวิ่ง"
                                required>

                            <input type="hidden" name="id_type_running"
                                value="<?=$result_type_running['id_type_running'];?>" />
                        </div>



                        <div class="form-group">
                            <label for="exampleInputEmail1">ระยะทาง</label>
                            <input type="text" name="distance_type_running" class="form-control" id="exampleInputEmail1"
                                value="<?=$result_type_running['distance_type_running'];?>" placeholder="ระยะทางการวิ่ง"
                                required>
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