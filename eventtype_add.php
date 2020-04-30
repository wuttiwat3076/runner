<?php include"header.php";?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>เพิ่มข้อมูลประเภทการรับสมัครวิ่ง

                        <a href="javascript:history.back(1)" class="btn btn-primary"> ย้อนกลับ</a>


                    </h1>

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="eventtype_list.php">ข้อมูลประเภทการรับสมัครวิ่ง</a></li>
                        <li class="breadcrumb-item active">เพิ่มข้อมูลประเภทการรับสมัครวิ่ง </li>
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


                    <?php 
include"config.inc.php";
$sql_running_event = "SELECT * FROM tbl_running_event where id_running_event=$_GET[id_running_event]"; 
$query_running_event = $conn->query($sql_running_event); 
$result_running_event = $query_running_event->fetch_assoc();

?>


                    <form role="form" method="post" action="eventtype_add_q.php">
                        <div class="card-body">


                            <div class="form-group">
                                <label for="exampleInputEmail1">งานวิ่ง</label>
                                <input type="text" name="name_running_event" class="form-control"
                                    id="exampleInputEmail1" value="<?=$result_running_event['name_running_event'];?>"
                                    placeholder="งานวิ่ง" disabled="disabled">


                                <input name="id_running_event" type="hidden"
                                    value="<?=$result_running_event['id_running_event'];?>" />
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">ประเภทการวิ่ง</label>



                                <select name="id_type_running" class="form-control" required>
                                    <option value="">เลือกรายการวิ่ง</option>

                                    <?php 
include"config.inc.php";
$sql_type_running = "SELECT * FROM tbl_type_running ORDER BY id_type_running ASC"; 
$query_type_running = $conn->query($sql_type_running); 
while($result_type_running = $query_type_running->fetch_assoc()){
?>
                                    <option value="<?=$result_type_running['id_type_running'];?>">
                                        <?=$result_type_running['name_type_running'];?>
                                        ระยะทาง : <?=$result_type_running['distance_type_running'];?> ก.ม. </option>




                                    <?php }?>
                                </select>




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