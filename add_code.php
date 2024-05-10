<?php
session_start();
include 'proc/conn.php';
?>
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


    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
              
                <div class="card-body">
                    <h2 class="title" style="text-align: center">Add Code</h2>
                    <form method="POST" action="proc/add_code_proc.php" enctype="multipart/form-data" >
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="code Name" name="nm" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Code text" name="text" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="file"  name="img" required>
                        </div>

                         <?php 
                          $q = "select * from cat_code";
                          $result = mysqli_query($conn,$q);
                         ?>


                        <div class="input-group">
                            <select name="cat" required>
                            	<?php
                            	while ($row = mysqli_fetch_row($result)) {
                            	?>

                               <option value="<?php echo $row[0];?>"> <?php echo $row[1]; ?></option>

                            	<?php
                            	}
                            	?>
                            </select> 
                        </div>
                        <div class="p-t-10" style="text-align: center">
                            <button  class="btn btn--pill btn--green" name="submit" type="submit">Add Code</button>
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