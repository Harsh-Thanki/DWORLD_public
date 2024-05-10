<?php
session_start();
include 'conn.php';

if (isset($_POST["submit"]) )
{
    $nm=$_POST['uname'];
	$pwd=$_POST['pwd'];

	$q = "select * from reg where usr_nm='".$nm."' and pwd='".$pwd."'";
	$result = mysqli_query($conn,$q);
    $row = mysqli_fetch_row($result);
   if (isset($row)) {
   	  $uid = $row[0];
   	  $_SESSION['uid'] = $uid;
      header("location:../index.php");
   }
   else
   {
    header("location:../index.php");
   }
}

else
{
	echo "error submit ";
}

?>