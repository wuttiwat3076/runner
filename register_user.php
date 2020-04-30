<?php include"header.php";?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>สมัครสมาชิก




			 	</h1>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">ข้อมูลผู้ใช้งาน</a></li>
              <li class="breadcrumb-item active">เพิ่มข้อมูลผู้ใช้งาน </li>
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
          <h3 class="card-title">ข้อมูลผู้ใช้งาน</h3>

        <div class="card-tools">

		</div>
        </div>

		<div class="col-sm-4">





		    <form role="form" method="post" action="register_user_q.php">
                <div class="card-body">


                  <div class="form-group">
                   <label for="exampleInputEmail1">ชื่อผู้ใช้งาน</label>
 <input type="text" name="name_user" class="form-control" id="exampleInputEmail1" placeholder="ชื่อผู้ใช้งาน" required >
                  </div>
				   <div class="form-group">
				  
				   <label for="exampleInputEmail1">นามสกุล</label>
<input type="text" name="last_user" class="form-control" id="exampleInputEmail1" placeholder="นามสกุล" required >
                  </div>



				   <div class="form-group">
                    <label for="exampleInputEmail1">ไอดีผู้ใช้</label>
<input type="text" name="username_user" class="form-control" id="exampleInputEmail1" placeholder="ไอดีผู้ใช้" required >
                  </div>



				   <div  class="form-group"> 
				   <label for="exampleInputEmail1">รหัสผ่าน</label>
<input type="password" name="password_user" class="form-control" id="exampleInputEmail1" placeholder="รหัสผ่าน" required >
                  </div>



				   <div class="form-group ">
				   <div class="row">
				   <div class="col">
                    <label for="exampleInputEmail1">อายุ</label>
<input type="number" name="age_user" class="form-control" id="exampleInputEmail1" min="10" max="100" placeholder="อายุ" required >
</div>
  <div class="col">
<label for="exampleInputEmail1">เพศ</label>
<select name="sex_user" class="form-control" required >
  <option value="male">ชาย</option>
  <option value="female">หญิง</option>
</select>       
</div>
</div>
</div>
				                 
				  
				 <!-- <div class="form-group">
 					  </div>-->
					  
					  
					   <div class="form-group">
                    <label for="exampleInputEmail1">เบอร์โทร</label>
<input type="text" name="tel_user" class="form-control" id="exampleInputEmail1" placeholder="เบอร์โทร" required >
                  </div>




				  	<div class="form-group">
                    <label for="exampleInputEmail1">อีเมลล์</label>
<input type="email" name="email_user" class="form-control" id="exampleInputEmail1" placeholder="อีเมลล์" required >
                  </div>



				   <div class="form-group">
                    <label for="exampleInputEmail1">ระดับผู้สมัคร</label>
<select name="level_user" class="form-control" required >
  <option value="1">ผู้สมัครวิ่ง</option>
  <option value="2">ผู้จัดงาน</option>
</select>
</div>

               
                <div align="right">
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
