 <?php 
   include 'conn.php';
   
   if (isset($_POST['submit'])) {

	$nm =$_POST['name'];
	$msg = $_POST['msg'];

	$q = "insert into contact values('','".$msg."',8)";	
	$result = mysqli_query($conn,$q);
   header("location:../contact.php?set=1");

}
else
{
	header("location:../contact.php");
}
?>

