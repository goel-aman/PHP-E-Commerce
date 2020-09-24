<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<style>
td
{
	padding :10px
}
tr:nth-child(even) {
	/* background: black; */
	}
	
	body{
			background:url('t15.jpg') no-repeat center center fixed;
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
$query="SELECT * FROM CUSTOMER_TABLE";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total !=0)
{
	?>
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
          <a id="Payment_">Customer Data</a>
        </li>
      </div>
            </div>
        </div>
    </nav>
	<table class="table" style="background:white;">
	    <tr>
		    <th scope="col">Email_Id</th>
			<th scope="col">Address</th>
			<th scope="col">Name</th>
			<th scope="col">Payment_id</th>
			<th scope="col">Password</th>
			<th scope="col">D_id</th>
			<th scope="col" colspan="2">Operations</th>
		</tr>
	
	<?php
	echo "<br/>";
	while($result =mysqli_fetch_assoc($data))
	{
		echo"<tr >
		    <td scope='row'>".$result['Email_Id']."</td>
			<td>".$result['Address']."</td>
			<td>".$result['Name']."</td>
			<td>".$result['Payment_Id']."</td>
			<td>".$result['Password']."</td>
			<td>".$result['D_Id']."</td>
			<td style='background:black'><a href='Customer_Table_Update.php?email_id=$result[Email_Id]&addr=$result[Address]&name=$result[Name]&Pay_id=$result[Payment_Id]&pass=$result[Password]&d_id=$result[D_Id]'>Edit</a></td>
			<td style='background:blue;'><a href='Customer_Table_Delete.php?email_id=$result[Email_Id]' onclick='return checkdelete()'>Delete</a></td>
		</tr>";
	}
}

else
{
	echo "No Record found";
}


?>
</table>
<script>
function checkdelete()
{
	return confirm('Are you sure you want to delete this data???');
}
</script>
