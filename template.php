<?php
 include 'header.php';

 include 'proc/conn.php';

$q = "select * from cat_temp";
$result = mysqli_query($conn,$q);
?>

      <!-- section subheader -->
      <section aria-label="subheader" class="no-top no-bottom" id="subheader">
        <div class="container-fluid">
          <div class="row">
            <div class="breadcumbs dot" aria-label="tagline">
              <div class="heading">TEMPLATE</div>
              <div class="content">
                <a href="index.php">HOME</a>
                 / 
                <span>TEMPLATE</span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- section subheader end -->  


  <!-- projects home -->
  <section class="bggray no-bottom" aria-label="about">
    <div class="container-fluid">
      <div class="row p-4-vh ml-mr-30">

        <div class="col-md-12 mb-5 onStep" data-animation="fadeInLeft" data-time="300">
              <h3 class="headingcontent">
                CATEGORIES
              </h3>
        </div>

         <?php
          while ($row = mysqli_fetch_row($result)) 
          {
          
        ?>
         <div class="col-md-4">
          <div class="gal-home">
            <a href="<?php echo "view_template.php?id=".$row[0]; ?>" class="hovereffect">
              <img alt="<?php echo $row[1]?>" class="img-responsive" style="height: 400px;" src="<?php echo "assets\images\cat temp/".$row[2]?>
              ">
            </a>
          </div>
          <div class="gal-home-content mb-5">
           <div class="left"> 
            <h4><?php echo $row[1] ?></h4>
           </div>
           <div class="right"> 
            <a class="shin col" href="<?php echo "view_template.php?id=".$row[0]; ?>">
              See Templates
            </a>
           </div>
          </div>
        </div>
<?php }
?>


      </div>
    </div>
  </section>
  <!-- projects home end -->

<?php
 include 'footer.php'
?>
