<?php
 include 'header.php';
 include 'proc/conn.php';
  $q = "select * from c_forum";
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


 				<div class="col-md-6" style="margin-left: 300px;margin-bottom: 70px">

  				<!-- comment blog -->
                 <div id="blog-comment">
 

                  <div id="respond" class="comment-respond">
                          <h4 id="reply-title" class="comment-reply-title">Select category
                          </h4>

                    <form action="que_career.php" method="get" id="commentform" class="comment-form" novalidate>
                      
                        <p class="comment-form-email">
                          <select name="cat" style="width: 540px;height: 40px;background: #191919;color: white;border: 1px solid rgba(255,255,255,.1)">
                          
                         <?php

                            while ($row=mysqli_fetch_row($result)) 
                             {
                          ?>

                            <option value="<?php echo $row[0]?>">
                              <?php echo $row[1];?>
                            </option>

                          <?php
                             } 

                          ?>

                          </select>
                          </p>
                      
                          <p class="form-submit">
                            <input name="submit" type="submit" id="submit" class="submit" value="Explore">
                              
                               
                                </p>
                              </form>
                        </div>
                     </div>
                    <!-- comment blog end -->

                 </div>


<?php
 include 'footer.php'
?>
