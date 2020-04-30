<?php include "header.php"; ?>

<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">

<?php 
include"config.inc.php";
$sql_user = "SELECT * FROM tbl_user where id_user=$_GET[id_user]"; 
$query_user = $conn->query($sql_user); 
$result_user = $query_user->fetch_assoc();
?>

<div class="py-5 bg-light" style="font-family: 'Kanit', sans-serif;
">
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-lg-8 mb-5">


                <form role="form" method="post" action="user_edit_q.php" class="p-5 bg-white">
                    <div class="card-body">

                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="fullname">แก้ไขข้อมูลสมาชิก</label>

                            </div>
                        </div>

                        <div class="card-body">


                            <div class="form-group">
                                <label for="exampleInputEmail1">ชื่อผู้ใช้งาน</label>
                                <input type="text" name="name_user" class="form-control" id="exampleInputEmail1"
                                    value="<?=$result_user['name_user'];?>" placeholder="ชื่อผู้ใช้งาน" required>

                                <input type="hidden" name="id_user" value="<?=$result_user['id_user'];?>" />

                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">นามสกุล</label>
                                <input type="text" name="last_user" class="form-control" id="exampleInputEmail1"
                                    value="<?=$result_user['last_user'];?>" placeholder="นามสกุล" required>
                            </div>



                            <div class="form-group">
                                <label for="exampleInputEmail1">ไอดีผู้ใช้</label>
                                <input type="text" name="username_user" class="form-control" id="exampleInputEmail1"
                                    value="<?=$result_user['username_user'];?>" placeholder="ไอดีผู้ใช้" required>
                            </div>



                            <div class="form-group">
                                <label for="exampleInputEmail1">รหัสผ่าน</label>
                                <input type="password" name="password_user" class="form-control" id="exampleInputEmail1"
                                    value="<?=$result_user['password_user'];?>" placeholder="รหัสผ่าน" required>
                            </div>



                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="exampleInputEmail1">อายุ</label>
                                        <input type="number" name="age_user" class="form-control"
                                            id="exampleInputEmail1" value="<?=$result_user['age_user'];?>" min="10"
                                            max="100" placeholder="อายุ" required>
                                    </div>

                                    <div class="col">
                                        <label for="exampleInputEmail1">เพศ</label>


                                        <select name="sex_user" class="form-control" required>
                                            <option value="male"
                                                <?php if($result_user['sex_user']=="male"){ echo "selected"; } ?>>ชาย
                                            </option>
                                            <option value="female"
                                                <?php if($result_user['sex_user']=="female"){ echo "selected"; } ?>>หญิง
                                            </option>
                                        </select>


                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">เบอร์โทร</label>
                                <input type="text" name="tel_user" class="form-control" id="exampleInputEmail1"
                                    value="<?=$result_user['tel_user'];?>" placeholder="เบอร์โทร" required>
                            </div>




                            <div class="form-group">
                                <label for="exampleInputEmail1">อีเมลล์</label>
                                <input type="email" name="email_user" class="form-control" id="exampleInputEmail1"
                                    value="<?=$result_user['email_user'];?>" placeholder="อีเมลล์" required>
                            </div>




                            <input name="level_user" type="hidden" value="<?php echo $result_user['level_user'];?>" />

                        </div>
                        <!-- /.card-body -->

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">อัพเดท</button>
                        </div>
                </form>

            </div>


        </div>
    </div>
</div>
<?php include"footer.php";?>