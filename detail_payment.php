<?php include"header.php";?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>จัดการข้อมูลการชำระเงิน
			
<a href="javascript:history.back(1)" class="btn btn-primary"> ย้อนกลับ</a>
			 
			 
			 	</h1>
			
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="payment_list.php">ข้อมูลการชำระเงิน</a></li>
              <li class="breadcrumb-item active">รายละเอียดการชำระเงิน</li>
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
          <h3 class="card-title">รายละเอียดการชำระเงิน</h3>

        <div class="card-tools">
        
		</div>
        </div>
		
        <div class="card-body">
         
		  
		  
              <table id="example1" class="table table-bordered table-striped">
                <thead>
				
                <tr>
                  <th>ชื่อ</th>
                  <th>ประเภทการวิ่ง</th>
                 
				  <th>จำนวนเงิน</th>
				  <th>สถานะการชำระเงิน</th>
                  
				  <th><div align="center">จัดการข้อมูล</div></th>
                </tr>
                </thead>
                <tbody>
								
	           <tr>
			      <td></td>
				  <td></td>
				 
				  <td></td>
				  <td></td>
                  
				  
				  <td> 
				  
				    <div align="center">
					<a href="#" class="btn btn-success"> รายละเอียด</a>
					 <a href="payment_edit.php" class="btn btn-warning"><i class="far fa-edit"></i> แก้ไข</a>
<a href="regisrun_del.php" class="btn btn-danger" onClick="return confirm('กรุณายืนยัน การลบ อีกครั้ง !!!')"> <i class="fas fa-trash"></i> ลบ</a>
			         	  
					</div>
					</td>
			   </tr>
			  
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

