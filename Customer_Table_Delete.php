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

$Email_Id=$_GET['email_id'];
$query="DELETE FROM CUSTOMER_TABLE WHERE Email_Id='$Email_Id'";
$data=mysqli_query($conn,$query);
if($data)
{
	echo "<script>alert('Record Deleted')</script>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/aman_goel/Customer_Table_Display.php">
	<?php
	
}

else
{
	echo "<font color='red'>Sorry, Delete process failed"; 
}



?>