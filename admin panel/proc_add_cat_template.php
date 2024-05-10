<?php
if (isset($_POST['csubmit'])) 
{
	$conn = mysqli_connect('localhost','root','','dworld');
	$nm = $_POST['cnm'];
	$desc = $_POST['cdesc'];
	
	#current image path
	$img = $_FILES['cimg']['name'];
	$timgnm = $_FILES['cimg']['tmp_name'];
   
    #target path
    $tpath = "C:\/xampp\htdocs\dworld\assets\images\/cat temp/";
    $timg = $tpath.$img;
   
    move_uploaded_file($timgnm, $timg);
   

    $q = "insert into cat_temp values('' ,'".$nm."','".$img."','".$desc."')";
    $result=mysqli_query($conn,$q);
    if ($result) {
    	header("location:add_cat_template.php?s=1");
    }
    else
    {
    	header("location:add_cat_template.php?f=1");

    }


}

?>