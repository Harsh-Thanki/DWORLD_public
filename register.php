<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>DWORLD</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>

     <?php


      if (isset($_GET['uavil'])) {
     ?>
      <script>
          alert("Username already exits")
      </script>
     <?php 
        }


      if (isset($_GET['cpwd'])) {
      ?>
          <script>
          alert("Password and Confirm password must same")   
          </script>
     <?php
      }


     ?>



    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
              
                <div class="card-body">
                    <h2 class="title" style="text-align: center">Sign Up</h2>
                    <form method="POST" action="proc/reg_proc.php">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Name" name="name" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Username" name="uname" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Password" name="pwd" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Confirm Password" name="cpwd" required>
                        </div>
                        <div class="p-t-10" style="text-align: center">
                            <button  class="btn btn--pill btn--green" name="signup" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->