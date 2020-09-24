<?php

$servername="localhost";
$username="root";
$password="";
$dbname="Project";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	echo "";
}
else
{
	die("Connection failed because ".mysqli_connect_error());
	
}

$D_Id=$_GET['D_id'];
$query="DELETE FROM DELIVERY WHERE D_Id='$D_Id'";
$data=mysqli_query($conn,$query);
if($data)
{
	echo "<script>alert('Record Deleted')</script>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL="http://localhost/aman_goel/Delivery_Table_Display.php">
	<?php 	
}

else
{
	echo "<font color='red'>Sorry, Delete process failed"; 
}



?>