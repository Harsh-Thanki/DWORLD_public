<?php
include "admin_header.php";
?>

				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>ADD LOGO CATEGORIES </h3>
							</div>
							<div class="module-body">

								<?php
                                       if (isset($_GET['s'])) {
                                 ?>

									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong> Success </strong> Data is inserted  
									</div>
                                <?php
                                       }

                                       if (isset($_GET['f'])) {
                                ?>
                                      
								<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Try Again</strong> Data is not inserted 
								</div>
                                <?php      
                                       }
                                       

								?>


									<form class="form-horizontal row-fluid" method="POST" action="proc_add_cat_logo.php" enctype="multipart/form-data" >
										<div class="control-group">
											<label class="control-label" for="basicinput">Logo Category Name :</label>
											<div class="controls">
												<input type="text" id="basicinput" class="span8" name="cat_nm" required>
						
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Logo Category Description :</label>
											<div class="controls">
												<textarea class="span8" rows="5" name="cat_desc" required></textarea>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Logo Category Image :</label>
											<div class="controls">
												<input type="file" class="btn" name="cat_img" required>
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
												<input type="submit" class="btn" value="Submit Form" name="cat_submit">
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

<?php
include "admin_footer.php";
?>
