<?php include"header.php";?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>แก้ไขข้อมูลประเภทการรับสมัครวิ่ง

                        <a href="javascript:history.back(1)" class="btn btn-primary"> ย้อนกลับ</a>


                    </h1>

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="eventtype_list.php">ข้อมูลประเภทการรับสมัครวิ่ง</a></li>
                        <li class="breadcrumb-item active">แก้ไขข้อมูลประเภทการรับสมัครวิ่ง </li>
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
                <h3 class="card-title">ข้อมูลประเภทการรับสมัครวิ่ง</h3>

                <div class="card-tools">

                </div>
            </div>

            <div class="card-body">
                <div class="col-sm-10">





                    <form role="form" method="post" action="user_add_q.php">
                        <div class="card-body">


                            <div class="form-group">
                                <label for="exampleInputEmail1">งานวิ่ง</label>
                                <input type="text" name="name_running_event" class="form-control"
                                    id="exampleInputEmail1" placeholder="งานวิ่ง" required>
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">ประเภทการวิ่ง</label>
                                <input type="text" name="name_type_running" class="form-control" id="exampleInputEmail1"
                                    placeholder="ประเภทการวิ่ง" required>
                            </div>



                            <div class="form-group">
                                <label for="exampleInputEmail1">จำนวนรับ</label>
                                <input type="number" name="number_received" class="form-control" id="exampleInputEmail1"
                                    placeholder="จำนวนที่รับ" required>
                            </div>



                            <div class="form-group">
                                <label for="exampleInputEmail1">ค่าสมัคร</label>
                                <input type="number" name="entry_fee" class="form-control" id="exampleInputEmail1"
                                    placeholder="ค่าสมัคร" required>
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