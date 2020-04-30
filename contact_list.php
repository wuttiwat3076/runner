<?php include"header.php";?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ข้อมูลผู้ขอจัดงาน

                        


                    </h1>

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">ข้อมูลผู้ขอจัดงาน</li>
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
                <h3 class="card-title">ข้อมูลผู้ขอจัดงาน</h3>

                <div class="card-tools">

                </div>
            </div>

            <div class="card-body">



                <table id="example1" class="table table-bordered table-striped">
                    <thead>

                        <tr>
                            <th>ลำดับที่</th>
                            <th>ชื่อ -นามสกุล</th>

                            <th>คณะที่สังกัด</th>
                            <th>เบอร์โทร</th>
                            <th>อีเมลล์</th>
                            <th>
                                <div align="center">จัดการข้อมูล</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
include"config.inc.php";
$i=0;
$sql_contact = "SELECT * FROM tbl_contact ORDER BY tbl_contact.id_contact ASC"; 
$query_contact = $conn->query($sql_contact); 
while($result_contact = $query_contact->fetch_assoc()){
$i++;
				?>

                        <tr>
                            <td><?=$i;?></td>
                            <td><?=$result_contact['name_contact'];?> </td>

                            <td><?=$result_contact['faculty_contact'];?></td>
                            <td><?=$result_contact['tel_contact'];?></td>
                            <td>
                                <?=$result_contact['email_contact'];?>

                            </td>
                            <td>

                                <div align="center">

                                    


                                    <a href="user_del.php?id_user=<?=$result_user['id_user'];?>" class="btn btn-danger"
                                        onClick="return confirm('กรุณายืนยัน การลบ อีกครั้ง !!!')"> <i
                                            class="fas fa-trash"></i> ลบ</a>


                                    <!--<?php if($result_user['level_user']!=3){?>
                                    <a href="user_del.php" class="btn btn-danger"
                                        onClick="return confirm('กรุณายืนยัน การลบ อีกครั้ง !!!')"> <i
                                            class="fas fa-trash"></i> ลบ</a>
                                    <?php }?>-->


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