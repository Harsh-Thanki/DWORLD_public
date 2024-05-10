<?php

 include 'header.php';
 if(isset($_REQUEST['cfid'])){

  $id2= $_REQUEST['cfid'];

 //fetch code of particular category
  $q = "select * from c_forum where cfid=".$id2;
  $result = mysqli_query($conn,$q);
  $row =mysqli_fetch_row($result)
 ?>


 				<div class="col-md-6" style="margin-left: 300px;margin-bottom: 70px">

  <!-- comment blog -->
                 <div id="blog-comment">
 

                  <div id="respond" class="comment-respond">
                          <h4 id="reply-title" class="comment-reply-title">Ask Question
                          </h4>
                          <p class="comment-notes">
                            <span id="email-notes">Your username will be published.</span> Required fields are marked 
                            <span class="required">*</span>
                          </p>
                    <form action="proc/que_form_proc.php" method="post" id="commentform" class="comment-form" novalidate>
                      
                        <p class="comment-form-email">
                          <label for="email">Select Category</label>
                          <span class="required">*</span><br>
                          <select name="cat" style="width: 540px;height: 40px;background: #191919;color: white;border: 1px solid rgba(255,255,255,.1)">
                          <option value="<?php echo $row[0]?>">
                            <?php
                            echo $row[1];
                            ?>
                          </option> 
                          </select>
                          </p>
                          <p class="comment-form-comment">
                        <label for="comment">Question</label>
                        <span class="required">*</span><br>
                        <textarea id="comment" name="que" cols="10" rows="10" aria-required="true"></textarea>
                      </p>
                      
                          <p class="form-submit">
                            <input name="submit" type="submit" id="submit" class="submit" value="SUBMIT">
                            <?php
                             $id = $_SESSION['uid'];
                            ?>
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                             
                                </p>
                              </form>
                        </div>
                     </div>
                     <!-- comment blog end -->

                 </div>

 <?php
 include 'footer.php';
}else
{
header("location:career forum.php");
}
?>
