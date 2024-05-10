<?php
 include 'header.php';
 
include 'proc/conn.php';

$q = "select * from cat_logo";
$result = mysqli_query($conn,$q);

?>


      <!-- section subheader -->
      <section aria-label="subheader" class="no-top no-bottom" id="subheader">
        <div class="container-fluid">
          <div class="row">
            <div class="breadcumbs dot" aria-label="tagline">
              <div class="heading">LOGO</div>
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


  <!-- projects home -->
  <section class="bggray no-bottom" aria-label="about">
    <div class="container-fluid">
      <div class="row p-4-vh ml-mr-30">

        <div class="col-md-12 mb-5 onStep" data-animation="fadeInLeft" data-time="300">
              <h3 class="headingcontent">
                CATEGORIES
              </h3>
        </div>

        <!--div class="col-md-4">
          <div class="gal-home">
            <a href="pictorial-cat-logo.php" class="hovereffect">
              <img alt="imageportofolio" class="img-responsive" style="height: 200px;" src="assets/images/gallery-home/pictorial marks/pictorial marks.png">
            </a>
          </div>
          <div class="gal-home-content mb-5">
           <div class="left"> 
            <h4>Pictorial marks</h4>
           </div>
           <div class="right"> 
            <a class="shin col" href="pictorial-cat-logo.php">
              see projects
            </a>
           </div>
          </div>
        </div-->


        <?php
        while($row = mysqli_fetch_row($result))
        {
        ?>

      <div class="col-md-4">
          <div class="gal-home">
            <a href="<?php echo "view_logo.php?id=".$row[0]; ?>" class="hovereffect">
              <img alt="<?php echo $row[2]?>" class="img-responsive" style="height: 200px;" src="<?php echo "assets/images/cat logo/".$row[2]?>">
            </a>
          </div>
          <div class="gal-home-content mb-5">
           <div class="left"> 
            <h4><?php echo $row[1] ?></h4>
           </div>
           <div class="right"> 
            <a class="shin col" href="<?php echo "view_logo.php?id=".$row[0]; ?>">
              see projects
            </a>
           </div>
          </div>
        </div>
<?php }
?>
        <!--div class="col-md-4">
          <div class="gal-home">
            <a href="projects-detail.html" class="hovereffect">
              <img alt="imageportofolio" class="img-responsive" style="height: 200px;" src="assets/images/gallery-home/abstract/abs.jpg">
            </a>
          </div>
          <div class="gal-home-content mb-5">
           <div class="left"> 
            <h4>Abstract design</h4>
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
              <img alt="imageportofolio" class="img-responsive" style="height: 200px;" src="assets/images/gallery-home/wordmark/wordmark.jpg">
            </a>
          </div>
          <div class="gal-home-content mb-5">
           <div class="left"> 
            <h4>Wordmark design</h4>
            
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
              <img alt="imageportofolio" class="img-responsive" style="height: 200px;" src="assets/images/gallery-home/monogram/mo 1.jpeg">
            </a>
          </div>
          <div class="gal-home-content mb-5">
           <div class="left"> 
            <h4>Monogram design</h4>
            
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
              <img alt="imageportofolio" class="img-responsive" style="height: 200px;" src="assets/images/gallery-home/emblem/emblems.jpg">
            </a>
          </div>
          <div class="gal-home-content mb-5">
           <div class="left"> 
            <h4>Emblem design</h4>
            
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
              <img alt="imageportofolio" class="img-responsive" style="height: 200px;" src="assets/images/gallery-home/mascot/mascots.png">
            </a>
          </div>
          <div class="gal-home-content mb-5">
           <div class="left"> 
            <h4>Mascot design</h4>
            
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
              <img alt="imageportofolio" class="img-responsive" style="height: 200px;" src="assets/images/gallery-home/combination mark/co 1.jpeg">
            </a>
          </div>
          <div class="gal-home-content mb-5">
           <div class="left"> 
            <h4>Combination-marks design</h4>
            
           </div>
           <div class="right"> 
            <a class="shin col" href="projects-detail.html">
              see projects
            </a>
           </div>
          </div>
        </div-->

      </div>
    </div>
  </section>
  <!-- projects home end -->




<?php
 include 'footer.php'
?>