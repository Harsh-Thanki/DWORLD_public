<?php
session_start();
include "proc/conn.php";
if (isset($_SESSION['uid'])) {
  $id = $_SESSION['uid'];
  $q="select * from reg where usr_reg_id=".$id;
  $result = mysqli_query($conn,$q);
  $row = mysqli_fetch_row($result);
  $nm = $row[2];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>DWORLD</title>
    <meta content="" name="description">
    <meta content="" name="author">
    <meta content="" name="keywords">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <!-- icon -->
    <link href="asset/img/favicon.html" rel="icon" sizes="32x32" type="image/png">
    <!-- plugin css -->
    <link href="plugin/css/bootstrap.min.css" rel="stylesheet">
    <link href="plugin/css/slidercss.css" rel="stylesheet">
    <!-- font themify CSS -->
    <link href="assets/css/themify-icons.css" rel="stylesheet" >
    <!-- font awesome CSS -->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- main css -->

    <link href="assets/css/scroll.css" rel="stylesheet">
    <link href="assets/css/animated-on3step.css" rel="stylesheet">
    <link href="plugin/css/owl.carousel.css" rel="stylesheet">
    <link href="plugin/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/on3step-style.css" rel="stylesheet">
    <link href="assets/css/queries-on3step.css" media="all" rel="stylesheet">
     <script src="js/bootstrap.min.js" type="text/javascript"></script>

     <style>
.profile_button {
  background-color: white;
  background-image: url("images/user4.png");
  display: inline-block;
  cursor: pointer;
  width: 70px;
  height: 70px;
  padding: 20px 0px;
  font-size: 24px;
  line-height: 1.33;
  border-radius: 35px;
}
.c_class 
{
  padding-top: 10px;
  padding-bottom: 10px;
  text-align: center;
}
</style>
  </head>
<body>

    <!-- preloader -->
    <div class="backgroundloader">
    <div class="loader">
            <div class="cirloader">
                <div id="circle"></div>
            </div>
        </div>
    </div>
    <!-- preloader end -->
    
    <!-- container -->
    <div class="content-wrapper">
    <!-- header -->
    <header class="init">
      <!-- nav -->
      <div class="navbar-default-white navbar-fixed-top">
        <!-- container -->
        <div class="container-fluid">
          <div class="row p-4-vh">
        
              <!-- logo --> 
              <a class="navbar-brand white" href="index.php">
             <!-- <img alt="logo" src="assets/images/logo.png">-->
                 <h4 style="color: white; text-decoration-style: bold">DWORLD</h4>
              </a> 
              <!-- logo end -->

              <div class="rightmenu">
                <div class="social-icons-subnav">
                	
                </div>

                <!-- menu icon-->
                <div id="nav-icon">
                  <span>close</span>
                  <div class="menu-line white"></div>
                  <div class="menu-line1 white"></div>
                  <div class="menu-line2 white"></div>
                </div>
                <!-- menu icon end -->
              </div>

          </div>
        </div>
        <!-- container end -->
      </div>
      <!-- nav end -->
      </header>
      <!-- header end -->

      <!-- main menu -->
      <section class="whitepage-menu" id="menu-block" aria-label="menu">
            <div class="wrap-menu">
             
            <div class="search-container text-center">
              <?php
               if (isset($_SESSION['uid'])) {
                 
              ?>
                   <!--input class="s-input-home" type="text" placeholder="Search…" name="search">
                    <button class="btn-s-input" type="submit"><i class="fa fa-search"></i></button-->
                    <button class="profile_button"></button>
                    <h3 style="text-align: center;">
                      <?php
                      echo $nm; 
                      ?>
                    </h3>
              <?php }?> 
            </div>
            <div class="wrap-menu-child">
              <ul>
                <li class="init-menu">
                    <a class="link" href="index.php">HOME</a>
                </li>
                <li class="init-menu dropdown">
                  <a class="dropdown-link">SERVICES <i>
                      <span class="pls">+</span>
                      <span class="min">-</span>
                    </i>
                  </a>
                  <ul class="dropdown-container">
                    <li><a class="link"  href="template.php">Templates</a>
                    </li>
                    <li><a class="link"  href="logo.php">Logo</a>
                    </li>
                    <li><a class="link"  href="code.php">Code</a>
                    </li>
                  </ul>
                </li>
                  

                 <?php if (isset($_SESSION['uid'])) { ?>
                 <li class="init-menu dropdown">
                  <a class="dropdown-link">FORUM <i>
                      <span class="pls">+</span>
                      <span class="min">-</span>
                    </i>
                  </a>

                  <ul class="dropdown-container">
                    <li><a class="link"  href="career forum.php">Career</a>
                    </li>
                  </ul>
                </li>
              <?php }?>


                <li class="init-menu">
               
               <?php   if (isset($_SESSION['uid'])) { ?>
                  <a class="link" href="contest.php">Contest</a>
                  <a class="link" href="add_logo.php">Add Logo</a>
                  <a class="link" href="add_code.php">Add Code</a>
                  <a class="link" href="proc/logout.php">Logout</a>
                <?php 
                       }
                       else
                       {
                ?>  
                  <a class="link" href="register.php">Register</a>
                   <a class="link" href="login.php">Login</a>
                <?php }?>  
                </li>

              </ul>
            </div>
                <div class="share">
                 <span class="share_title">Follow us : </span>
                    <ul>
                        <li><a class="sharesoc"  href="#"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a class="sharesoc"  href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a class="sharesoc"  href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="sharesoc"  href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
      </section>
      <!-- main menu end -->

      <!-- block-menu -->
      <div class="block-main"></div>
      <!-- block-menu end-->

