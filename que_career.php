<?php


 include 'header.php';
 if (isset($_GET['cat'])) {
 
  include 'proc/conn.php';
  
  $id = $_GET['cat'];

 //fetch code of particular category
  $q = "select * from c_que where cfid=".$id;
  $result = mysqli_query($conn,$q);

 ?>

  <!-- section subheader -->
      <section aria-label="subheader" class="no-top no-bottom" id="subheader">
        <div class="container-fluid">
          <div class="row">

            <div class="breadcumbs">
              <div class="heading">
                Career Forum
              </div>
              <div class="content">
                <a href="index.php">HOME</a>
                 / 
                <span>Career Forum</span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- section subheader end -->
<!-- banner -->
  <section class="bgcolor no-padding" aria-label="about">
    <div class="container">
      <div class="row">
        <div class="col-md-8 my-md-5 mt-5 mb-3 text-center">
          <h5>Hey, Looking for any solution?</h5>
        </div>
        <div class="col-md-4 my-md-5 mb-5 text-center">
          <a class="btnFn" href="<?php echo "que_form.php?cfid=".$id;?>">ASK QUESTION →</a>
        </div>
      </div>
    </div>
  </section>
  <!-- banner end -->
 <!-- comment blog -->

  <div class="col-md-9" style="margin-left: 100px;margin-bottom: 70px">
                     <div id="blog-comment">

                        <?php
                         while ($row =mysqli_fetch_row($result)) {
                        

                        ?>
                        <ul>
                           <li>
                              <div class="avatar">
                              </div>
                              <div class="comment-info">
                                 <span class="c-name">
                                  <?php 
                                   
                                   #fetch username
                                   $urid = $row[2];
                                   $q2 = "select usr_reg_nm from reg where usr_reg_id=".$urid;
                                   $re2 = mysqli_query($conn,$q2);
                                   $r2 = mysqli_fetch_row($re2); 
                                   echo $r2[0]; 
                                  ?>
                                 </span>
                                 <div class="comment-content entry clr">

                                  <a href="<?php echo "single_que_career.php?qid=".$row[0]?>">
                                  <p>
                                  <?php
                                  echo $row[1];
                                  ?>
                                  </p>
                                  </a>
                                
                                </div>
                              </div>
                            </li>
                          </ul>
                        <?php

                         }
                        ?>
                        

                        </div>
                             
                   </div>
                     <!-- comment blog end -->
<?php
 include 'footer.php';
}
else
{
header("location:career forum.php");
}
?>