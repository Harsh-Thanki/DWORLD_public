<?php
 include 'header.php';

 include 'proc/conn.php';

$q = "select * from cat_code";
$result = mysqli_query($conn,$q);
?>

      <!-- section subheader -->
      <section aria-label="subheader" class="no-top no-bottom" id="subheader">
        <div class="container-fluid">
          <div class="row">
            <div class="breadcumbs dot" aria-label="tagline">
              <div class="heading">CODE</div>
              <div class="content">
                <a href="index.php">HOME</a>
                 / 
                <span>CODE</span>
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
            <a href="<?php echo "view_code.php?id=".$row[0]; ?>" class="hovereffect">
              <img alt="<?php echo $row[3]?>" class="img-responsive" style="height: 400px;" src="<?php echo "assets\images\lang logo/".$row[2]?>
              ">
            </a>
          </div>
          <div class="gal-home-content mb-5">
           <div class="left"> 
            <h4><?php echo $row[1] ?></h4>
           </div>
           <div class="right"> 
            <a class="shin col" href="<?php echo "view_code.php?id=".$row[0]; ?>">
              see Code
            </a>
           </div>
          </div>
        </div>
<?php }
?>

        <!--div class="col-md-4">
          <div class="gal-home">
            <a href="projects-detail.html" class="hovereffect">
              <img alt="imageportofolio" class="img-responsive" src="assets/images/lang logo/c.png">
            </a>
          </div>
          <div class="gal-home-content mb-5">
           <div class="left"> 
            <h4>C Program</h4>
           </div>
           <div class="right"> 
            <a class="shin col" href="projects-detail.html">
              see Code
            </a>
           </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="gal-home">
            <a href="projects-detail.html" class="hovereffect">
              <img alt="imageportofolio" class="img-responsive" src="assets/images/lang logo/java.png">
            </a>
          </div>
          <div class="gal-home-content mb-5">
           <div class="left"> 
            <h4>JAVA Program</h4>
            
           </div>
           <div class="right"> 
            <a class="shin col" href="projects-detail.html">
              see Code
            </a>
           </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="gal-home">
            <a href="projects-detail.html" class="hovereffect">
              <img alt="imageportofolio" class="img-responsive"   src="assets/images/lang logo/php.png">
            </a>
          </div>
          <div class="gal-home-content mb-5">
           <div class="left"> 
            <h4>PHP Program</h4>
           </div>
           <div class="right"> 
            <a class="shin col" href="projects-detail.html">
              see Code
            </a>
           </div>
          </div>
        </div-->

        <!--div class="col-md-4">
          <div class="gal-home">
            <a href="projects-detail.html" class="hovereffect">
              <img alt="imageportofolio" class="img-responsive" src="assets/images/gallery-home/img1.jpg">
            </a>
          </div>
          <div class="gal-home-content mb-5">
           <div class="left"> 
            <h4>Interior design</h4>
            <p>Interior</p>
           </div>
           <div class="right"> 
            <a class="shin col" href="projects-detail.html">
              see projects
            </a>
           </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="gal-home">
            <a href="projects-detail.html" class="hovereffect">
              <img alt="imageportofolio" class="img-responsive" src="assets/images/gallery-home/img4.jpg">
            </a>
          </div>
          <div class="gal-home-content mb-5">
           <div class="left"> 
            <h4>Architecture design</h4>
            <p>Interior</p>
           </div>
           <div class="right"> 
            <a class="shin col" href="projects-detail.html">
              see projects
            </a>
           </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="gal-home">
            <a href="projects-detail.html" class="hovereffect">
              <img alt="imageportofolio" class="img-responsive" src="assets/images/gallery-home/img3.jpg">
            </a>
          </div>
          <div class="gal-home-content mb-5">
           <div class="left"> 
            <h4>Modern design</h4>
            <p>Interior</p>
           </div>
           <div class="right"> 
            <a class="shin col" href="projects-detail.html">
              see projects
            </a>
           </div>
          </div>
        </div>

        <div class="col-md-12 text-center mb-5 pb-5">
           <a class="btnFn" href="#">
              MORE CATEGORIES
            </a>
        </div-->



      </div>
    </div>
  </section>
  <!-- projects home end -->



<?php
 include 'footer.php'
?>