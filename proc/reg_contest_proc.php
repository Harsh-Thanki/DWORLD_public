<?php
session_start();
include 'conn.php';
if (isset($_POST['submit'])) {

	$usrid=$_POST['unm'];
	$cid=$_POST['cat'];

	$q1 ="insert into contest_reg values('',".$usrid.",".$cid.")";
	$result = mysqli_query($conn,$q1);

	 header("location:../reg_contest.php?done=true&id=".$cid);
}
?>