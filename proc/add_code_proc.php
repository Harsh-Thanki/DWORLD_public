<?php
session_start();
include 'conn.php';
if (isset($_POST['submit'])) {

	$nm =$_POST['nm'];
	$desc = $_POST['text'];

	
	$cid = $_POST['cat'];
	$uid = $_SESSION['uid'];
    
 #current image path
	$img = $_FILES['img']['name'];
	$timgnm = $_FILES['img']['tmp_name'];
   
    #target path
    $tpath = "C:/xampp\htdocs\dworld\assets\code files/";
    $timg = $tpath.$img;
   
    move_uploaded_file($timgnm, $timg);




   $q = "select * from reg where usr_reg_id=".$uid;
   $r = mysqli_query($conn,$q);
   $row = mysqli_fetch_row($r);
   $onm = $row[2];
  
	$q1 = "insert into code values('','".$nm."','".$onm."','".$desc."','".$img."',".$cid.",".$uid.")";
	$result = mysqli_query($conn,$q1);


    header("location:../view_code.php?id=".$cid);

}

?>