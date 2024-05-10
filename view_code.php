<?php

if(isset($_GET['id']))
 {

  include 'header.php';
  include 'proc/conn.php';

  $id = $_GET['id'];

 //fetch code of particular category
  $q = "select * from code where cat_code_id=".$id;
  $result = mysqli_query($conn,$q);

  ?>

      <!-- section subheader -->
      <section aria-label="subheader" class="no-top no-bottom" id="subheader">
        <div class="container-fluid">
          <div class="row">

            <div class="breadcumbs">
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


     
 <!-- comment blog -->

  <div class="col-md-9" style="margin-left: 100px;margin-bottom: 70px">
                     <div id="blog-comment">

                        <?php
                         while ($row =mysqli_fetch_row($result)) {
                        

                        ?>
                        <ul>
                           <li>
                              
                              <div class="comment-info">
                                 <span class="c-name">
                                  Que :
                                  <?php 
                                    echo $row[3];
                                  ?>
                               
                                
                                </span>
                                 <div class="comment-content entry clr" style="padding-top: 20px">

                                  <a href="assets\code files\<?php echo $row[4] ?>" download="<?php echo $row[1]?>">
                                    <b>Download </b>
                                  </a>
                                  </p>
                                  </a>
                                
                                </div>

                                 <div class="comment-content entry clr">
                                  Contributed By
                                  <b style="color:#fead15">
                                 <?php 
                                    echo $row[2];
                                  ?>
                                  </b>
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

    <!-- container end -->

<?php
include 'footer.php';
?>

<?php
}
else
{
  header("location:code.php");
}
?>