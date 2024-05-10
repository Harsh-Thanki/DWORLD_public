<?php
 include 'header.php';
if(isset($_REQUEST['qid']))
{


  include 'proc/conn.php';
  
  $id = $_REQUEST['qid'];

 //fetch question
  $q = "select * from c_que where cqid=".$id;
  $result = mysqli_query($conn,$q);
  $row=mysqli_fetch_row($result);
  

 //fetch answer
  $q1 = "select * from c_ans where cqid=".$id;
  $result2 = mysqli_query($conn,$q1);
  

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

       
       <div class="col-md-8" style="margin-left: 200px">

      <div id="blog-comment">
                      

                        <ul>
                           <li>
                              <div class="avatar">
                              </div>

                              <!-- Question-->
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
                                  <p>
                                  <?php
                                  echo $row[1];
                                  ?>
                                  </p>
                                  </div>
                                 <span class="c-reply"><a class="link"  href="<?php echo"ans_form.php?cqid=".$row[0]?>">Reply</a></span>
                              </div>
                              <!-- end Question-->

                              <!-- ans -->
                              <ul>
                                 <?php 
                                 while ($row2=mysqli_fetch_row($result2)) 
                                 {
                                  ?>
                                 <li>
                                    <div class="avatar">
                                    </div>
                                    <div class="comment-info">
                                       <span class="c-name">
                                        <?php
                                         #fetch username
                                         $aurid = $row2[2];
                                         $aq2 = "select usr_reg_nm from reg where usr_reg_id=".$aurid;
                                         $are2 = mysqli_query($conn,$aq2);
                                         $ar2 = mysqli_fetch_row($are2); 
                                         echo $ar2[0]; 
                                         ?>
                                        </span>
                                      
                                       <div class="comment-content entry clr">
                                        <p>
                                          <?php echo $row2[1];?>
                                        </p>
                                       </div>
                                       
                                    </div>
                                    
                                 </li>
                               <?php }?>
                              </ul>
                              <!-- end ans -->
                           
                           </li>
                       </ul>
                  </div>
              </div>

<?php
 include 'footer.php';
}
else
{
  header("location:career forum.php");
}
?>