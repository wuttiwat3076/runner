<?php include"header.php";?>


<?php 
include"config.inc.php";
$sql_running_event = "SELECT * FROM tbl_running_event where id_running_event=$_GET[id_running_event]"; 
$query_running_event = $conn->query($sql_running_event); 
$result_running_event = $query_running_event->fetch_assoc();

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ข้อมูลประเภทการรับสมัครวิ่ง <h2> <?=$result_running_event['name_running_event'];?></h2>
</h1>
			
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
			<li class="breadcrumb-item active">ประเภทการรับสมัครวิ่ง</li>
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
          <h3 class="card-title">ข้อมูลประเภทการรับสมัครวิ่ง</h3>

        <div class="card-tools">
        
		</div>
        </div>
		
        <div class="card-body">
         
		  
		  
              <table id="example1" class="table table-bordered table-striped">
                <thead>
				
                <tr>
                   <th>ลำดับ</th>
                  <th>ประเภทการวิ่ง	</th>
                  <th>จำนวนที่รับ</th>
                  <th>ค่าสมัคร</th>
                 
				  <th><div align="center">รายชื่อผู้สมัคร</div></th>
                </tr>
                </thead>
                <tbody>
				
<?php 
include"config.inc.php";
$i=0;
$sql_event_type = "SELECT * FROM tbl_event_type , tbl_type_running where tbl_event_type.id_type_running=tbl_type_running.id_type_running and  tbl_event_type.id_running_event=$_GET[id_running_event]"; 
$query_event_type = $conn->query($sql_event_type); 
while($result_event_type = $query_event_type->fetch_assoc()){
$i++;

$id_event_type=$result_event_type['id_event_type'];
$sql_register_run = "SELECT COUNT(id_register_run) As cc FROM tbl_register_run where id_event_type=$id_event_type "; 
$query_register_run = $conn->query($sql_register_run); 
$result_register_run = $query_register_run->fetch_assoc()


?>


            
                <tr>
				 <td><?=$i;?></td>
                  <td><?=$result_event_type['name_type_running'];?>  ระยะทาง <?=$result_event_type['distance_type_running'];?> กม.</td>
                  <td><?=$result_register_run['cc'];?> / <?=$result_event_type['number_received'];?> </td>
                  <td><?=$result_event_type['entry_fee'];?></td>
               <td> 
				  
				    <div align="center">
  <a href="runevent_list_reg_user.php?id_event_type=<?=$result_event_type['id_event_type'];?>" class="btn btn-primary"><i class="far fa-edit"></i> รายชื่อผู้สมัคร</a>		  
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
  $(function () {
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

