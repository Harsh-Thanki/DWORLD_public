<?php
 

 if(isset($_GET['id']))
 {
  include 'header.php';
  include 'proc/conn.php';

  $id = $_GET['id'];
  $q = "select * from logo where logo_id=".$id;
  $result = mysqli_query($conn,$q);
  $row = mysqli_fetch_row($result);

  $uid = $row[8];
  $q2 = "select * from reg where usr_reg_id=".$uid;

  $result2 = mysqli_query($conn,$q2);
  $row2 =mysqli_fetch_row($result2);

  $email = $row2[4];
?>


  <!-- section subheader -->
      <section aria-label="subheader" class="no-top no-bottom" id="subheader">
        <div class="container-fluid">
          <div class="row">

            <div class="breadcumbs">
              <div class="heading">ABOUT LOGO</div>
              <div class="content">
                <a href="index.php">HOME</a>
                 / 
                <span>LOGO</span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- section subheader end -->  



      <!-- section about -->
      <section aria-label="detail" id="about-us-1" class="no-padding">
            <div class="container-fluid">
             <div class="row">
       
                <!--div class="image-container autoheight-1 col-md-6 onStep" data-animation="fadeInLeft" data-time="0"></div-->
                <div class="col-md-6 autoheight-1">
                     <br>
                <img src="assets\images\logo\<?php echo $row[5]?>" width="600" height="450" alt="<?php echo $row[5]?>" />
            
                </div>
                <div class="col-md-6 autoheight-1">
                  <div class="p90">
                    <h4 class="headingcontent mt-1">
                    <?php echo $row[1]?>
                    </h4>
                    <p>
                    	Description :   <?php echo $row[2]?>
                    	<br>
                    	<br>
                    	Owner :   <?php echo $row[3]?>
                    	<br><br>
                    	Price :   Rs.<?php echo $row[4]?>
                    	<br><br>
                    	Email :   <?php echo $email?>
                    </p>

             
                  </div>
                </div>
                

                </div>
            </div>
        </section>
      <!-- section about end --> 



<?php
include 'footer.php';
?>

<?php
}
else
{
  header("location:logo.php");
}
?>