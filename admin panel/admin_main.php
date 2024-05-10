<?php
include "admin_header.php";
      $conn = mysqli_connect('localhost','root','','dworld');
?>
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="#" class="btn-box big span4"><i class=" icon-envelope"></i>
                                        <b>
                                            <?php  
                                 
                                            $q1 = "select * from contact";
                                            $result1=mysqli_query($conn,$q1);
                                            $id1 = mysqli_num_rows($result1);
                                            echo $id1;
                                            ?>
                                        </b>
                                        <p class="text-muted">
                                            Messages</p>
                                    </a>


                                    <a href="#" class="btn-box big span4"><i class="icon-user"></i><b>

                                     <?php  
                                 
                                       $q = "select * from reg";
                                       $result=mysqli_query($conn,$q);
                                       $id = mysqli_num_rows($result);
                                       echo $id;
                                     ?>
                                      </b>
                                        <p class="text-muted">
                                            New Users</p>
                                    </a>



                                    <a href="#" class="btn-box big span4"><i class="icon-group"></i>
                                        <b>
                                    <?php  
                                 
                                       $q = "select * from feedback";
                                       $result=mysqli_query($conn,$q);
                                       $id = mysqli_num_rows($result);
                                       echo $id;
                                     ?>
                                        </b>
                                        <p class="text-muted">
                                            Feedback
                                        </p>
                                    </a>




                                </div>
                               

                                <div class="btn-box-row row-fluid">
                                    <div class="span9">
                        <div class="content" style="margin-left: 170px">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="#" class="btn-box big span4"><i class="icon-file"></i>
                                        <b>
                                            <?php  
                                 
                                            $q1 = "select * from code";
                                            $result1=mysqli_query($conn,$q1);
                                            $id1 = mysqli_num_rows($result1);
                                            echo $id1;
                                            ?>
                                        </b>
                                        <p class="text-muted">
                                            Code</p>
                                    </a>


                                    <a href="#" class="btn-box big span4"><i class="icon-star"></i><b>

                                     <?php  
                                 
                                       $q = "select * from logo";
                                       $result=mysqli_query($conn,$q);
                                       $id = mysqli_num_rows($result);
                                       echo $id;
                                     ?>
                                      </b>
                                        <p class="text-muted">
                                            Logo</p>
                                    </a>



                                    <a href="#" class="btn-box big span4"><i class="icon-money"></i>
                                        <b>
                                    <?php  
                                 
                                       $q = "select * from contest";
                                       $result=mysqli_query($conn,$q);
                                       $id = mysqli_num_rows($result);
                                       echo $id;
                                     ?>
                                        </b>
                                        <p class="text-muted">
                                            Contest
                                        </p>
                                    </a>




                                </div>
                    
                                    
                                </div>
                        
                            <!--div class="module hide">
                                <div class="module-head">
                                    <h3>
                                        Adjust Budget Range</h3>
                                </div>
                                <div class="module-body">
                                    <div class="form-inline clearfix">
                                        <a href="#" class="btn pull-right">Update</a>
                                        <label for="amount">
                                            Price range:</label>
                                        &nbsp;
                                        <input type="text" id="amount" class="input-" />
                                    </div>
                                    <hr />
                                    <div class="slider-range">
                                    </div>
                                </div>
                            </div>
                           
                        </div-->
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
    <?php
include "admin_footer.php";
?>

