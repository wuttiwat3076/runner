<?php include"header.php";?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>แก้ไขข้อมูลการจ่ายเงิน

<a href="javascript:history.back(1)" class="btn btn-primary"> ย้อนกลับ</a>


			 	</h1>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="payment_list.php">ข้อมูลการจ่ายเงิน</a></li>
              <li class="breadcrumb-item active">แก้ไขข้อมูลการจ่ายเงิน</li>
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
          <h3 class="card-title">ข้อมูลการจ่ายเงิน</h3>

        <div class="card-tools">

		</div>
        </div>

        <div class="card-body">
		<div class="col-sm-10">





		    <form role="form" method="post" action="user_add_q.php">
                <div class="card-body">


                  <div class="form-group">
                   <label for="exampleInputEmail1">รหัสการจ่ายเงิน</label>
 <input type="text" name="id_payment" class="form-control" id="exampleInputEmail1" placeholder="รหัสการจ่ายเงิน" required >
                  </div>


				   <div class="form-group">
                    <label for="exampleInputEmail1">รหัสการสมัครวิ่ง</label>
<input type="text" name="id_register_run" class="form-control" id="exampleInputEmail1" placeholder="รหัสการสมัครวิ่ง" required >
                  </div>



				   <div class="form-group">
                    <label for="exampleInputEmail1">จำนวน</label>
<input type="number" name="amount_payment" class="form-control" id="exampleInputEmail1" placeholder="จำนวนเงินที่จ่าย" required >
                  </div>



				   <div class="form-group">
                    <label for="exampleInputEmail1">วันที่จ่าย</label>
<input type="date" name="date_payment" class="form-control" id="exampleInputEmail1" placeholder="วันที่จ่ายเงิน" required >
                  </div>
				  
				  
				   <div class="form-group">
                    <label for="exampleInputEmail1">เวลา</label>
<input type="time" name="time_payment" class="form-control" id="exampleInputEmail1" placeholder="เวลาที่จ่ายเงิน" required >
                  </div>
				  
				  
				   
				  
				   <div class="form-group">
                    <label for="exampleInputEmail1">ไฟล์รูปสลิป</label>
<input type="file" name="slip_payment" class="form-control" id="exampleInputEmail1" placeholder="สลิปจ่ายเงิน" required >
                  </div>
				  
				   <div class="form-group">
                    <label for="exampleInputEmail1">รหัสธนาคาร</label>
<input type="text" name="id_bank" class="form-control" id="exampleInputEmail1" placeholder="รหัสธนาคาร" required >
                  </div>
				  
				  
				  
				  
				  
				 </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">บันทึก</button>
                </div>
              </form>


        
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

