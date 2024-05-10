<?php
 include 'header.php';
  include 'proc/conn.php';
 if(isset($_REQUEST['id']))
 {

   $id = $_REQUEST['id'];
  $q = "select * from contest where cid=".$id;
  $result = mysqli_query($conn,$q);
  $row =mysqli_fetch_row($result);
  $cnm = $row[1];
  $cve = $row[4];
  
   #for registration purpose
   $urid = $_SESSION['uid'];
   $q2 = "select * from reg where usr_reg_id=".$urid;
   $result2 = mysqli_query($conn,$q2);
  $row2 =mysqli_fetch_row($result2);
  $unm =$row2[2];
  $uco =$row2[4];


?>


<div class="col-md-6" style="margin-left: 300px;margin-bottom: 70px">

  <!-- comment blog -->
                 <div id="blog-comment">
 

                  <div id="respond" class="comment-respond">
                          <h4 id="reply-title" class="comment-reply-title">Contest Registration
                          </h4>
                          <p class="comment-notes">
                            <span id="email-notes">Other Detail we will send you in your email.</span> Required fields are marked 
                            <span class="required">*</span>
                          </p>
                    <form action="proc/reg_contest_proc.php" method="post" id="commentform" class="comment-form" novalidate>
                      
                        <p class="comment-form-email">
                          <label for="email">Contest Name</label>
                          <span class="required">*</span><br>
                          <select name="cat" style="width: 540px;height: 40px;background: #191919;color: white;border: 1px solid rgba(255,255,255,.1)">
                          <option value="<?php echo $row[0]?>">
                            <?php
                            echo $cnm;
                            ?>
                          </option> 
                          </select>
                          </p>
                           <p class="comment-form-email">
                          <label for="email">Contest Location</label>
                          <span class="required">*</span><br>
                          <select name="catl" style="width: 540px;height: 40px;background: #191919;color: white;border: 1px solid rgba(255,255,255,.1)">
                          <option value="<?php echo $row[0]?>">
                            <?php
                            echo $cve;
                            ?>
                          </option> 
                          </select>
                          </p>

                           <p class="comment-form-email">
                          <label for="email">Your Name</label>
                          <span class="required">*</span><br>
                          <select name="unm" style="width: 540px;height: 40px;background: #191919;color: white;border: 1px solid rgba(255,255,255,.1)">
                          <option value="<?php echo $urid?>">
                            <?php
                            echo $unm;
                            ?>
                          </option> 
                          </select>
                          </p>

                           <p class="comment-form-email">
                          <label for="email">Your Contact</label>
                          <span class="required">*</span><br>
                          <select name="uco" style="width: 540px;height: 40px;background: #191919;color: white;border: 1px solid rgba(255,255,255,.1)">
                          <option value="<?php echo $urid?>">
                            <?php
                            echo $uco;
                            ?>
                          </option> 
                          </select>
                          </p>





                           <?php
                            if(isset($_GET['done']))
                            {
                              ?>
                            <p class="comment-notes">
                            <span id="email-notes">Registeration complete</span>  
                            
                          </p>

                            <?php
                            }
                            else
                            {
                           ?>
                          <p class="form-submit">
                            <input name="submit" type="submit" id="submit" class="submit" value="SUBMIT">
                          </p>
                         <?php } ?>
                              </form>
                        </div>
                     </div>
                     <!-- comment blog end -->

                 </div>









<?php
 include 'footer.php';
 }
 else
{
header("location:contest.php");
}
?>