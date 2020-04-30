<?php include "header.php"; ?>

<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">


    <div class="py-5 bg-light" style="font-family: 'Kanit', sans-serif;
">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-12 mb-5">
          
            
          
            <form action="check_login.php"  method="post" class="p-5 bg-white">
			
			<div class="row form-group" style="font-family: 'Kanit', sans-serif;
">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">เข้าสู่ระบบ</label>
         
                </div>
              </div>
			  
			  

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Username</label>
                  <input type="text" name="username_user" id="user_user" class="form-control" placeholder="Username" required>
                </div>
              </div>
			  
              <div class="row form-group">
                <div class="col-md-6">
                  <label class="font-weight-bold" for="email">Password</label>
                  <input type="password" name="password_user" id="user_pass" class="form-control" placeholder="Password" required>
                </div>
              </div>


             

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="เข้าสู่ระบบ" class="btn btn-primary text-white px-4 py-2">
				  <a href="user_add.php" class="btn btn-info text-white px-4 py-2" > สมัครสมาชิก </a>
                </div>
              </div>

  
            </form>
          </div>

          
            
            
          </div>
        </div>
      </div>
    </div>





    <?php include"footer.php";?>