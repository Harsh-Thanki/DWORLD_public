<?php
session_start();
include 'conn.php';
if (isset($_POST['submit'])) {

    $uid=$_POST['id'];
	$qid=$_POST['qid'];
	$ans=$_POST['ans'];

	$q = "insert into c_ans values('','".$ans."',".$uid.",".$qid.")";
	 $result = mysqli_query($conn,$q);

	 header("location:../single_que_career.php?qid=".$qid);
}
?>