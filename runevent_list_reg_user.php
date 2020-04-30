<?php include"header.php";?>




<?php 
$id_event_type=@$_GET['id_event_type'];
include"config.inc.php";
$sql_running_event = "SELECT * FROM tbl_event_type ,tbl_running_event , tbl_type_running where tbl_event_type.id_running_event=tbl_running_event.id_running_event and 
tbl_event_type.id_type_running=tbl_type_running.id_type_running and 
tbl_event_type.id_event_type=$id_event_type "; 
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
            <h2> <?=$result_running_event['name_running_event'];?>  : <?=$result_running_event['name_type_running'];?> <?=$result_running_event['distance_type_running'];?> K </h2>

			
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item active">รายชื่อผู้สมัคร</li>
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
          <h3 class="card-title">ข้อมูลประเภทการรับสมัครวิ่ง</h3>&nbsp;&nbsp;&nbsp;
		  
		  
        <a href="run_number.php?id_event_type=<?php echo $id_event_type;?>" class="btn btn-primary">  Run - number </a>	
		
		<a href="del_number.php?id_event_type=<?php echo $id_event_type;?>" class="btn btn-secondary">  Delete - number </a>	
		
		
		
		
        <div class="card-tools">
        
		</div>
        </div>
		
        <div class="card-body">
         
		  
		  
              <table id="example1" class="table table-bordered table-striped">
                <thead>
				
                <tr>
                   <th>ลำดับ</th>
                  <th>ชื่อผู้สมัคร</th>
				  <th>อายุ</th>
				  <th>เพศ</th>
				  <th>หมายเลข</th>
				  <th>Size</th>  
                  <th>สถานะการชำระเงิน</th>
               </tr>
                </thead>
                <tbody>
				
<?php 
include"config.inc.php";
$i=0;
$id_event_type=@$_GET['id_event_type'];

$sql_register_run = "SELECT * FROM tbl_register_run , tbl_user where 
tbl_register_run.id_user=tbl_user.id_user  and
tbl_register_run.id_event_type=$id_event_type 
 

"; 
$query_register_run = $conn->query($sql_register_run); 
while($result_register_run = $query_register_run->fetch_assoc()){
$i++;

?>


            
                <tr>
				 <td><?=$i;?></td>
                  <td>คุณ <?=$result_register_run['name_user'];?> <?=$result_register_run['last_user'];?> </td>
				    <td><?=$result_register_run['age_user'];?> </td>
					  <td><?=$result_register_run['sex_user'];?> </td>
                  <td><?php echo $result_running_event['short_type_running'];   echo $result_register_run['number_register_run'];?> </td>
				  <td><?=$result_register_run['size_register_run'];?> </td>
                  <td>
				   <?php 
					   
					 $status = $result_register_run['status_register_run'];
					
					switch ($status) {
						case "1":
							echo "รอชำระเงิน  ";
							break;
						case "2":
							echo "ชำระเงินแล้ว รอยืนยัน";
							break;
						case "3":
							echo "สำเร็จ";
					    	break;
						default:
							echo "รอชำระเงิน";
				                      	}
		
					   ?>
				  
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

