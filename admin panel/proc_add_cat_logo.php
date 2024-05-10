<?php
if (isset($_POST['cat_submit'])) 
{
	$conn = mysqli_connect('localhost','root','','dworld');
	$nm = $_POST['cat_nm'];
	$desc = $_POST['cat_desc'];
	
	#current image path
	$img = $_FILES['cat_img']['name'];
	$timgnm = $_FILES['cat_img']['tmp_name'];
   
    #target path
    $tpath = "C:\/xampp\htdocs\dworld\assets\images\cat logo/";
    $timg = $tpath.$img;
   
    move_uploaded_file($timgnm, $timg);
   

    $q = "insert into cat_logo values('' ,'".$nm."','".$img."','".$desc."')";
    $result=mysqli_query($conn,$q);
    if ($result) {
    	header("location:add_cat_logo.php?s=1");
    }
    else
    {
    	header("location:add_cat_logo.php?f=1");

    }


}

?>