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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        body{
            background:url('back2.jpg');
        }
    .divform{
        text-align:left;
        width:40%;
        margin:auto;
        margin-top:30px;
        border:1px solid black;
        padding:20px;
        padding-left:30px;
        padding-right:30px;
        background:grey;
    }
	#cen{
		position:relative;
		text-align:center;
		margin-left:600px;
		margin-top:20px;
		font-weight:bold;
	}
    </style>
</head>
<body>
<div class="divform bg-primary"> 
<h1 style="text-shadow: 10px 10px 10px black !important;text-align:center;">Customer Details Updation</h1>
<form action="" method="GET">
	<div class="form-group">
Email_Id<input type="text" class="form-control" name="Email_Id" value="<?php echo $_GET['email_id']; ?>"/><br>
Address<input type="text" class="form-control" name="Address" value="<?php echo $_GET['addr']; ?>"/><br>
Name<input type="text" class="form-control" name="Name" value="<?php echo $_GET['name']; ?>"/><br>
Payment_id<input type="text" class="form-control" name="Payment_id" value="<?php echo $_GET['Pay_id']; ?>"/><br>
Password<input type="text" class="form-control" name="Password" value="<?php echo $_GET['pass']; ?>"/><br>
D_id<input type="text" class="form-control" name="D_id" value="<?php echo $_GET['d_id']; ?>"/><br>
<input type="submit" class="form-control" name="submit" value ="Update" class="btn-primary"/>
</div>

</form>
</div>
<?php

if($_GET['submit'])
{
	$name=$_GET['Name'];
	$email_id=$_GET['Email_Id'];
	$pass=$_GET['Password'];
	
	$query="UPDATE CUSTOMER_TABLE SET NAME='$name' ,Email_Id='$email_id' where Password='$pass' "; 
	$data=mysqli_query($conn,$query);
	if($data)
	{
		echo "<font color='green'>Record Updated successfully. <a href='Customer_Table_Display.php'>Check Updated List Here</a>";
	}
	else
	{
		echo "<font color='red'>Record not updated.<a href='Customer_Table_Display.php'>Check Updated List Here</a>";
		
	}
}

else
{
	echo "<font color='black' id='cen'>Click on update button to save changes";
}
?>

</body>
</html>