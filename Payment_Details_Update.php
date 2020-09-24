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
        img{

        }
        body{
            background:url('back4.jpg');
        }
    .divform{
        /* text-align:left; */
        width:40%;
        color:white;
        margin:auto;
        /* margin-top:30px;
        border:1px solid black;
        padding:20px;
        padding-left:30px;
        padding-right:30px;
        background:grey; */
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
<div class="divform"> 
<h1 style="text-shadow: 5px 5px 10px black !important;text-align:center;">Payment Details Updation</h1>
<form action="" method="GET">
	<div class="form-group">
<span style="text-shadow: 5px 5px 10px black !important" >Email_Id</span><input type="text" class="form-control" name="Email_Id" value="<?php echo $_GET['email_id']; ?>"/><br>
<span style="text-shadow: 5px 5px 10px black !important" >Address</span><input type="text" class="form-control" name="Address" value="<?php echo $_GET['addr']; ?>"/><br>
<span style="text-shadow: 5px 5px 10px black !important" >Name</span><input type="text" class="form-control" name="Name" value="<?php echo $_GET['name']; ?>"/><br>
<span style="text-shadow: 5px 5px 10px black !important" >Payment_id</span><input type="text" class="form-control" name="Payment_id" value="<?php echo $_GET['Pay_id']; ?>"/><br>
<span style="text-shadow: 5px 5px 10px black !important" >Password</span><input type="text" class="form-control" name="Password" value="<?php echo $_GET['pass']; ?>"/><br>
<span style="text-shadow: 5px 5px 10px black !important" >D_id</span><input type="text" class="form-control" name="D_id" value="<?php echo $_GET['d_id']; ?>"/><br>
<input type="submit" class="form-control" name="submit" value ="Update" class="btn-primary"/>
</div>

</form>
</div>
<?php

if($_GET['submit'])
{
	$Payment_Id=$_GET['Payment_Id'];
	$Amount=$_GET['Amount'];
    $Payment_Type=$_GET['Payment_Type'];
    $Discount = $_GET['Discount'];
    $Credential_Id = $_GET['Credential_Id'];
    $Credential_Password = $_GET['Credential_Password'];
	
	$query="UPDATE payment SET Amount='$Amount' ,Payment_Type='$Payment_Type',Discount='$Discount',Credential_Id='$Credential_Id',Credential_Password='$Credential_Password' where Payment_Id='$Payment_Id' "; 
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