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
    $tpath = "C:\/xampp\htdocs\dworld\assets\images\slider/";
    $timg = $tpath.$img;
   
    move_uploaded_file($timgnm, $timg);
   

    $q = "insert into contest values('' ,'".$nm."','2021-05-10 18:01:33','2021-05-16 18:01:33','".$desc."','".$img."')";
    $result=mysqli_query($conn,$q);
    if ($result) {
    	header("location:add_contest.php?s=1");
    }
    else
    {
    	header("location:add_contest.php?f=1");

    }


}

?>