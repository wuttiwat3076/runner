<?php include"header.php";?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-sm-6">
                    <h1>จัดการประเภทการวิ่ง

                        <a href="typerun_add.php" class="btn btn-primary"><i class="nav-icon far fa-plus-square"></i>
                            เพิ่มข้อมูลประเภทการวิ่ง</a>


                    </h1>

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">ข้อมูลประเภทการวิ่ง</li>
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



                <table id="example1" class="table table-bordered table-striped">
                    <thead>

                        <tr>

                            <th>ชื่อประเภทการวิ่ง</th>
                            <th>ระยะทาง</th>

                            <th>
                                <div align="center">จัดการข้อมูล</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
include"config.inc.php";
$i=0;
$sql_type_running = "SELECT * FROM tbl_type_running ORDER BY tbl_type_running.id_type_running ASC"; 
$query_type_running = $conn->query($sql_type_running); 
while($result_type_running = $query_type_running->fetch_assoc()){
$i++;

                ?>
                        <tr>

                            <td><?=$result_type_running['name_type_running'];?></td>
                            <td><?=$result_type_running['distance_type_running'];?>กิโลเมตร</td>

                            <td>

                                <div align="center">
                                    <a href="typerun_edit.php?id_type_running=<?=$result_type_running['id_type_running'];?>" class="btn btn-warning"><i class="far fa-edit"></i>
                                        แก้ไข</a>
                                    <a href="typerun_del.php?id_type_running=<?=$result_type_running['id_type_running'];?>" class="btn btn-danger"
                                        onClick="return confirm('กรุณายืนยัน การลบ อีกครั้ง !!!')"> <i
                                            class="fas fa-trash"></i> ลบ</a>

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