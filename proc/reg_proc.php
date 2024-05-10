<?php
include 'conn.php';

if (isset($_POST["signup"]) )
{
    $nm=$_POST["name"];
    $unm = $_POST["uname"];
	$mail=$_POST["email"];
	$pwd=$_POST["pwd"];
	$cpwd = $_POST["cpwd"];

	if ($pwd==$cpwd) {
		
      #check username is available or not
		$q1 = "select * from reg where usr_nm='$unm'";
		$r1 = mysqli_query($conn,$q1);
  		$count1 = mysqli_num_rows($r1);
  	    
  	    if($count1 != 0) 
  	    {	
		  #generate error if unm already exits
  		  header("location:../register.php?uavil=1");

  	    } 
  	    else
  	    {
  	    	#enter value in db
  	    	$q2 = "insert into reg values('','$unm','$nm','$pwd','$mail')";
  	    	$check=mysqli_query($conn,$q2);
  	    	header("location:../login.php");
  	    }


	}
	else
	{ 
		#generate error if pwd != cpwd
		header("location:../register.php?cpwd=1");
	}
  
}


?>