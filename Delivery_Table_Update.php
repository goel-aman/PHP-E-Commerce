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
error_reporting(0);

?>

<html>
<head>
</head>
<body>

<form action="" method="GET">
D_Id<input type="text" name="d_id" value="<?php echo $_GET['D_Id']; ?>"/><br></br>
Email_Id<input type="text" name="email_Id" value="<?php echo $_GET['Email_Id']; ?>"/><br></br>
D_Cost<input type="text" name="d_Cost" value="<?php echo $_GET['D_Cost']; ?>"/><br></br>
Payment_Id<input type="text" name="payment_Id" value="<?php echo $_GET['Payment_id']; ?>"/><br></br>
<input type="submit" name="submit" value ="Update"/>


</form>
<?php
if($_GET['submit'])
{
	$D_Id=$_GET['d_id'];
	$Email_Id=$_GET['email_Id'];
	$D_Cost=$_GET['d_Cost'];
	$Payment_Id=$_GET['payment_Id'];
	
	$query="UPDATE DELIVERY SET Email_Id='$Email_Id' ,D_Cost='$D_Cost',Payment_Id='$Payment_Id' where D_Id='$D_Id' "; 
	$data=mysqli_query($conn,$query);
	if($data)
	{
		echo "<font color='green'>Record Updated successfully. <a href='Delivery_Table_Display.php'>Check Updated List Here</a>";
	}
	else
	{
		echo "<font color='red'>Record not updated.<a href='Delivery_Table_Display.php'>Check Updated List Here</a>";
		
	}
}

else
{
	echo "<font color='blue'>Click on update button to save changes";
}
?>

</body>
</html>
