<?php
 

 if(isset($_GET['id']))
 {
  include 'header.php';
  include 'proc/conn.php';
  $id = $_GET['id'];
 //fetch logo of particular category
  $q = "select * from logo where cat_logo_id=".$id;
  $result = mysqli_query($conn,$q);

  //fetch cat nm
  $q2 = "select * from cat_logo where cat_logo_id=".$id;
  $result2 = mysqli_query($conn,$q2);
  $row2 = mysqli_fetch_row($result2);
?>
      <!-- section subheader -->
      <section aria-label="subheader" class="no-top no-bottom" id="subheader">
        <div class="container-fluid">
          <div class="row">

            <div class="breadcumbs">
              <div class="heading">
                <?php echo $row2[1]; ?>
              </div>
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

              <!-- project -->
         <section class="bggray no-bottom" aria-label="about">
    <div class="container-fluid">
      <div class="row p-4-vh ml-mr-30">

        <div class="col-md-12 mb-5 onStep" data-animation="fadeInLeft" data-time="300">
              <h3 class="headingcontent">
                LOGO
              </h3>
        </div>
            
            <?php 

              while ($row=mysqli_fetch_row($result)) {
              
             ?>
             
               <div class="col-md-4">
          <div class="gal-home">
            <a href="<?php echo "logo info.php?id=".$row[0]; ?>" class="hovereffect">
              <img alt="<?php echo $row[1]?>" class="img-responsive" style="height: 400px;" src="<?php echo "assets\images\logo/".$row[5]?>
              ">
            </a>
          </div>
          <div class="gal-home-content mb-5">
           <div class="left"> 
            <h4><?php echo $row[1] ?></h4>
           </div>
           <div class="right"> 
            <a class="shin col" href="<?php echo "logo info.php?id=".$row[0]; ?>">
              see logo
            </a>
           </div>
          </div>
        </div>
            <?php 
             }
            ?>
          
                <!-- project end -->

      <!-- section gallery end -->

      </div>
    </div>
  </section>

    
    
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