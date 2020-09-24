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
			background:url('back.jpeg') no-repeat center center fixed;
			background-size: cover;
			
        }

	   .divform{
        text-align:left;
        width:40%;
        margin:auto;
        margin-top:70px;
        border:1px solid black;
        padding:10px;
        padding-left:30px;
        padding-right:30px;
        background:grey;
		
		
			
    }
	#heading{
		font-weight:bold;
		color:red;
	}



	.footer {
      width: 100%;
      background-color: rgb(65, 60, 60);
      color: white;
    }
    #bu_pos{
        position:fixed;
        bottom:25px;
        right:35px;
        width:380px;
        
    }

    a {
      color: white !important;
    }

    .navbar-inverse {
      background: #2c3e50 !important;
    }

    #link-color {
      color: blue;
    }

    body {

      padding-top: 70px;
    }
    #div_placement{
        position:fixed;
        right:50px;
        top:100px;
        border:2px solid black;
        width:375px;
        
    }
    img {
      height: 300px;
      width: 345px;
    }
    #Payment_{
        font-weight:400;
        margin-left:330px;
        font-size:30px;
        text-shadow: 5px 5px 10px black !important;
    }
	</style>
</head>
<body>
<div id="top"></div>
    <nav class="navbar navbar-inverse  navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="DBMS_project.php" class="navbar-brand"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span>&nbsp;E-Tshirts.com</a>
                <div class="nav navbar-nav">
        <li>
          <a id="Payment_">Sign Up Page</a>
        </li>
      </div>
            </div>
        </div>
    </nav>
<div class="bg-image"></div>
<div class="divform bg-primary"> 
<div class="form-group">
<form action="" method="GET">
Email_Id<input class="form-control" type="text" name="Email_Id" value="" requried/><br>
Address<input class="form-control" type="text" name="Address" value="" requried/><br>
Name<input class="form-control" type="text" name="Name" value="" requried/><br>
Payment_id<input class="form-control" type="text" name="Payment_id" value=""  /><br>
Password<input class="form-control" type="text" name="Password" value="" requried/><br>
D_id<input class="form-control" type="text" name="D_id" value=""/><br>
<input class="form-control btn-warning" type="submit" name="submit" value ="Submit"/>


</form>
</div>
</div>
<?php

if($_GET['submit'])
{
	$email_id=$_GET['Email_Id'];
	$addr=$_GET['Address'];
	$name=$_GET['Name'];
	$Pay_id=555;
	$Pass=$_GET['Password'];
	$d_id=777;
	
	
       	$query ="INSERT INTO Customer_Table values('$email_id','$addr','$name','$Pay_id','$Pass','$d_id')";
		$data=mysqli_query($conn,$query);	
		if($data)
		{
			echo "<p style='color:white;'>Data inserted into the database</p>";
		}
	
}
?>

</body>
</html>