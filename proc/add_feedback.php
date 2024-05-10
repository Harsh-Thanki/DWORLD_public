 <?php 
   include 'conn.php';
   
   if (isset($_POST['submit'])) {

	$nm =$_POST['name'];
	$mail = $_POST['email'];
	$feed = $_POST['feed'];

	$q = "insert into feedback values(' ','".$nm."','".$mail."','".$feed."')";	
	$result = mysqli_query($conn,$q);
   header("location:../feedback.php?set=1");

}
else
{
	header("location:../feedback.php");
}
?>

