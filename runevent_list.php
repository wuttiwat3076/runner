<?php include"header.php";?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>จัดการข้อมูลงานวิ่ง

                        <a href="runevent_add.php" class="btn btn-primary"><i class="nav-icon far fa-plus-square"></i>
                            จัดงานวิ่ง</a> </h1>

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">


                        <li class="breadcrumb-item active">ข้อมูลงานวิ่ง</li>
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
                <h3 class="card-title">ข้อมูลงานวิ่ง</h3>

                <div class="card-tools">

                </div>
            </div>

            <div class="card-body">



                <table id="example1" class="table table-bordered table-striped">
                    <thead>

                        <tr>
                            <th>ลำดับ</th>
                            <th>ชื่อผู้จัด</th>
                            <th>ชื่องานวิ่ง</th>
                            <th>วันที่จัด</th>


                            <th>
                                <div align="center">จัดการข้อมูล</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>




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
 if($level_user==3){

    $sql_running_event = "SELECT * FROM tbl_running_event , tbl_user where tbl_running_event.id_user=tbl_user.id_user"; 
    
    }else{
     $sql_running_event = "SELECT * FROM tbl_running_event , tbl_user where tbl_running_event.id_user=tbl_user.id_user  and  tbl_running_event.id_user=$id_user  ORDER BY tbl_running_event.id_running_event ASC"; 
    }




$query_running_event = $conn->query($sql_running_event); 
while($result_running_event = $query_running_event->fetch_assoc()){
$i++;
?>



                        <tr>
                            <td><?=$i;?></td>
                            <td><?=$result_running_event['name_user'];?> <?=$result_running_event['last_user'];?></td>
                            <td><?=$result_running_event['name_running_event'];?></td>
                            <td><?=$result_running_event['date_running_event'];?></td>


                            <td>

                                <div align="center">
                                    <a href="eventtype_list.php?id_running_event=<?=$result_running_event['id_running_event'];?>"
                                        class="btn btn-success">ประเภทการรับสมัคร</a>

                                    <a href="runevent_edit.php?id_running_event=<?=$result_running_event['id_running_event'];?>"
                                        class="btn btn-warning"><i class="far fa-edit"></i> แก้ไข</a>
                                    <a href="runevent_del.php?id_running_event=<?=$result_running_event['id_running_event'];?>"
                                        class="btn btn-danger"
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