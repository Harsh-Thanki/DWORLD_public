<?php
session_start();
include 'conn.php';
if (isset($_POST['submit'])) {

	$nm =$_POST['nm'];
	$desc = $_POST['desc'];
	$p = $_POST['pr'];
	
	$cid = $_POST['cat'];
	$uid = $_SESSION['uid'];
    
 #current image path
	$img = $_FILES['img']['name'];
	$timgnm = $_FILES['img']['tmp_name'];
   
    #target path
    $tpath = "C:/xampp\htdocs\dworld\assets\images\logo/";
    $timg = $tpath.$img;
   
    move_uploaded_file($timgnm, $timg);




   $q = "select * from reg where usr_reg_id=".$uid;
   $r = mysqli_query($conn,$q);
   $row = mysqli_fetch_row($r);
   $onm = $row[2];
  
	$q1 = "insert into logo values('','".$nm."','".$desc."','".$onm."',".$p.",'".$img."','".$img."',".$cid.",".$uid.")";
	$result = mysqli_query($conn,$q1);


    header("location:../view_logo.php?id=".$cid);

}

?>