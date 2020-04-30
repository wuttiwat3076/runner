<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>PSU RUNNER</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">



    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body style="background-color:powderblue;">

    <div class="site-wrap">



        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->


        <div class="site-navbar-wrap js-site-navbar bg-white" style="font-family: 'Kanit', sans-serif; 
">

            <div class="container">
                <div class="site-navbar bg-light">
                    <div class="py-1">
                        <div class="row align-items-center">
                            <div class="col-2">
                                <h2 class="mb-0 site-logo"><a href="index.php"><img src="images/logorun.png" width="120"
                                            height="90" /></a></h2>
                            </div>
                            <div class="col-10">
                                <nav class="site-navigation text-right" role="navigation">
                                    <div class="container">
                                        <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                                                class="site-menu-toggle js-menu-toggle text-black"><span
                                                    class="icon-menu h3"></span></a></div>

                                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                                            <li><a href="index.php">
                                                    <h5 style="color:#2F4F4F;">
                                                        หน้าแรก
                                                    </h5>
                                                </a></li>

                                            <li><a href="run_all.php">
                                                    <h5 style="color:#2F4F4F;">
                                                        งานวิ่งทั้งหมด
                                                    </h5>
                                                </a></li>




                                            <?php 
  if(isset($_SESSION['level_user'])){
  $level_user=$_SESSION['level_user'];
 ?>

                                            <li><a href="createevent.php">
                                                    <h5 style="color:#2F4F4F;">
                                                        จัดงานวิ่ง
                                                    </h5>
                                                </a></li>

                                            <li class="has-children">
                                                <a href="#" style="color:#FF6633;">
                                                    <?php echo $_SESSION['name_user']?>
                                                        <?php echo $_SESSION['last_user']?> &nbsp; &nbsp;
                                                </a>
                                                <ul class="dropdown">
                                                    <li><a
                                                            href="user_edit.php?id_user=<?php echo $_SESSION['id_user']?>">แก้ไขข้อมูล</a>
                                                    </li>
                                                    <li><a href="register_run_list.php">ข้อมูลการสมัครวิ่ง</a></li>

                                                    <li><a href="logout.php">
                                                            ออกจากระบบ
                                                        </a></li>
                                                </ul>
                                            </li>



                                            <?php   }else{ ?>


                                            <li><a href="user_add.php">
                                                    <h5 style="color:#2F4F4F;">
                                                        สมัครสมาชิก
                                                    </h5>
                                                </a></li>
                                            <li><a href="login.php">
                                                    <h5 style="color:#2F4F4F;">
                                                        เข้าสู่ระบบ
                                                    </h5>
                                                </a></li>
                                            <li><a href="createevent.php">
                                                    <h5 style="color:#2F4F4F;">
                                                        จัดงานวิ่ง
                                                    </h5>
                                                </a></li>

                                            <?php
  $level_user="";
  }
 ?>










                                            <?php if($level_user==2){?>
                                            <li><a href="blackoffice/">
                                                    <h5 style="color:#2F4F4F;">
                                                        จัดการข้อมูล
                                                    </h5>
                                                </a></li>
                                            <?php }?>


                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>