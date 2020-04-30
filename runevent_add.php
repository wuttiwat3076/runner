<?php include"header.php";?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>จัดงานวิ่ง

                        <a href="javascript:history.back(1)" class="btn btn-primary"> ย้อนกลับ</a>


                    </h1>

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="runevent_list.php">ข้อมูลงานวิ่ง</a></li>
                        <li class="breadcrumb-item active">จัดงานวิ่ง</li>
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
                <h3 class="card-title">ข้อมูลงานวิ่ง</h3>

                <div class="card-tools">

                </div>
            </div>

            <div class="card-body">
                <div class="col-sm-10">





                    <form role="form" method="post" action="runevent_add_q.php" enctype="multipart/form-data">
                        <div class="card-body">
                        <div class="col-sm-8">
                            <?php 

if(isset($_SESSION['id_user'])){
$id_user=$_SESSION['id_user'];
}else{
$id_user="";
}
?>

                            <input name="id_user" type="hidden" value="<?=$id_user;?>" />




                            <div class="form-group">
                           

                                <label for="exampleInputEmail1">คณะ</label>

                                <select name="id_faculty" class="form-control" required>
                                    <option value=""> --- เลือกคณะ --- </option>

                                    <?php 
include"config.inc.php";
$sql_faculty = "SELECT * FROM tbl_faculty ORDER BY id_faculty ASC"; 
$query_faculty = $conn->query($sql_faculty); 
while($result_faculty = $query_faculty->fetch_assoc()){
?>
                                    <option value="<?=$result_faculty['id_faculty'];?>">
                                        <?=$result_faculty['name_faculty'];?>
                                    </option>

                                    <?php }?>
                                </select>



                            </div>




                            <div class="form-group">
                                <label for="exampleInputEmail1">งานวิ่ง</label>
                                <input type="text" name="name_running_event" class="form-control"
                                    id="exampleInputEmail1" placeholder="ชื่องานวิ่ง" required>
                            </div>



                            <div class="form-group">
                                <label for="exampleInputEmail1">วันที่จัด</label>
                                <input type="date" name="date_running_event" class="form-control"
                                    id="exampleInputEmail1" placeholder="วันที่" required>
                            </div>



                            <div class="form-group">
                                <label for="exampleInputEmail1">รูปงานวิ่ง</label>
                                <input type="file" name="photo_running_event" class="form-control"
                                    id="exampleInputEmail" placeholder="รูปงานวิ่ง" required>
                            </div>







                            <div class="form-group">
                                <label for="exampleInputEmail1">รูปเสื้องานวิ่ง</label>
                                <input type="file" name="shirtphoto_running_event" class="form-control"
                                    id="exampleInputEmail" placeholder="รูปเสื้องานวิ่ง" required>

                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">รูปแผนที่งานวิ่ง</label>
                                <input type="file" name="map_running_event" class="form-control" id="exampleInputEmail"
                                    placeholder="รูปแผนที่งานวิ่ง" required>

                            </div>



                            <div class="form-group">
                                <label for="exampleInputEmail1">รายละเอียด</label>


                                <textarea name="detail_running_event" class="form-control"></textarea>

                            </div>





                        </div>
                        <!-- /.card-body -->

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">บันทึก</button>
                        </div>
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