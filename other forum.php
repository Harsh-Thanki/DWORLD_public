<?php
 include 'header.php';
 ?>

	<!-- section subheader -->
      <section aria-label="subheader" class="no-top no-bottom" id="subheader">
        <div class="container-fluid">
          <div class="row">

            <div class="breadcumbs">
              <div class="heading">
                Technical Forum
              </div>
              <div class="content">
                <a href="index.php">HOME</a>
                 / 
                <span>Technical Forum</span>
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

                    <form action="que_other.php" method="post" id="commentform" class="comment-form" novalidate>
                      
                        <p class="comment-form-email">
                          <select name="cat" style="width: 540px;height: 40px;background: #191919;color: white;border: 1px solid rgba(255,255,255,.1)">
                          <option>Programing Errors</option> 
                          <option>"How To" Queries</option> 
                          </select>
                          </p>
                      
                          <p class="form-submit">
                            <input name="submit" type="submit" id="submit" class="submit" value="Explore">
                              <input type="hidden" name="comment_post_ID" value="292" id="comment_post_ID">
                                <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                </p>
                              </form>
                        </div>
                     </div>
                    <!-- comment blog end -->

                 </div>

<?php
 include 'footer.php'
?>