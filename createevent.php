<?php include "header.php"; ?>
<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">

<div class="py-5 bg-light">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-lg-8 mb-5" style="font-family: 'Kanit', sans-serif;">


                <form role="form" method="post" action="createevent_q.php" class="p-5 bg-white">
                    <div class="card-body">

                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="fullname">กรอกข้อมูล</label>

                            </div>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">ชื่อ-สกุลผู้ติดต่อ</label>
                            <input type="text" name="name_contact" class="form-control" id="exampleInputEmail1"
                                placeholder="ชื่อ-สกุลผู้ติดต่อ" required>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">คณะที่สังกัด</label>
                            <input type="text" name="faculty_contact" class="form-control" id="exampleInputEmail1"
                                placeholder="คณะที่สังกัด" required>
                        </div>



                        <div class="form-group">
                            <label for="exampleInputEmail1">เบอร์โทร</label>
                            <input type="text" name="tel_contact" class="form-control" id="exampleInputEmail1"
                                placeholder="เบอร์โทร" required>
                        </div>



                        <div class="form-group">
                            <label for="exampleInputEmail1">อีเมลล์</label>
                            <input type="Email" name="email_contact" class="form-control" id="exampleInputEmail1"
                                placeholder="อีเมลล์" required>
                        </div>






                    </div>
                    <!-- /.card-body -->

                    <div class="form-group">

                        <button type="submit" class="btn btn-primary">ส่งข้อมูล</button>
                    </div>
                    <p style="color:red;"> *เจ้าหน้าที่จะทำการตรวจสอบและติดต่อกลับ</p><br><br>
                    <h4>ติดต่อเรา</h4><br>
                    <p>Email : wuttiwatmadman@outlook.com</p>
                    <p>Tel : 0801389126</p>

                </form>

            </div>


        </div>
    </div>
</div>
<?php include"footer.php";?>