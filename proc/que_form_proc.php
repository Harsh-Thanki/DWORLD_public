<?php
session_start();
include 'conn.php';
if (isset($_POST['submit'])) {

    $uid=$_POST['id'];
	$cid=$_POST['cat'];
	$que=$_POST['que'];

	$q = "insert into c_que values('','".$que."',".$uid.",".$cid.")";
	 $result = mysqli_query($conn,$q);

	 header("location:../que_career.php?cat=".$cid);
	}
?>