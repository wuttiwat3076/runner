<?php include "header.php"; ?>
<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">

<div class="py-5 bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5" style="font-family: 'Kanit', sans-serif;"
>
           
          		  
             <form role="form" method="post" action="user_add_q.php" class="p-5 bg-white">
                <div class="card-body">
				
				<div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">สมัครสมาชิก</label>
         
                </div>
              </div>


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



				   <div class="form-group">
                    <label for="exampleInputEmail1">รหัสผ่าน</label>
<input type="password" name="password_user" class="form-control" id="exampleInputEmail1" placeholder="รหัสผ่าน" required >
                  </div>



				   <div class="form-group">
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


                  



				   <div class="form-group">
                    <label for="exampleInputEmail1">เบอร์โทร</label>
<input type="text" name="tel_user" class="form-control" id="exampleInputEmail1" placeholder="เบอร์โทร" required >
                  </div>




				  	<div class="form-group">
                    <label for="exampleInputEmail1">อีเมลล์</label>
<input type="email" name="email_user" class="form-control" id="exampleInputEmail1" placeholder="อีเมลล์" required >
                  </div>



				  
<input name="level_user" type="hidden" value="1" />


                </div>
                <!-- /.card-body -->

                <div class="form-group">
                  <button type="submit" class="btn btn-primary">สมัครสมาชิก</button>
                </div>
              </form>

          </div>


        </div>
      </div>
    </div>
    <?php include"footer.php";?>