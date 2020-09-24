<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Project";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if ($conn) { } else {
  die("connection failed because" . mysqli_connect_error());
}
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Payment Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style>
    .footer {
      width: 100%;
      background-color: rgb(65, 60, 60);
      color: white;
    }

    #bu_pos {
      position: fixed;
      bottom: 25px;
      right: 35px;
      width: 380px;

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

    #div_placement {
      position: fixed;
      right: 50px;
      top: 100px;
      border: 2px solid black;
      width: 375px;

    }

    img {
      height: 300px;
      width: 345px;
    }

    #Payment_ {
      font-weight: 400;
      margin-left: 330px;
      font-size: 30px;
      text-shadow: 5px 5px 10px black !important;
    }

    .discount{
      border:2px solid black;
      background:grey;
      display:inline-block;
      padding:20px;
      color:white;
      font-size:20px;
      position:fixed;
      left:680px;
      top:103px;
      width:28%;
    }

    .po {
      border: 2px solid black;
      width: 40%;
      margin-bottom: 20px;
      margin-left: 50px;
      padding: 10px;
    }

    .yu {
      margin-left: 20px;
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
            <a id="Payment_">Payment Page</a>
          </li>
        </div>
      </div>
    </div>
  </nav>




  <!-- form Starting -->

  <form action="" method="">

    <div class="po">

      <div class="card w-50">
        <div class="card-body">
          <h5 class="card-title"><input type="radio" name="payment_type" value="paypal">&nbsp;Paypal</h5>
          <p class="card-text yu">This Card is Recommended for you.</p>
        </div>
      </div>
    </div>


    
    <div class="po">

      <div class="card w-50">
        <div class="card-body">
          <h5 class="card-title"><input type="radio" name="payment_type" value="Amazon Pay">&nbsp;Amazon Pay</h5>
          <p class="card-text yu">This Card is Recommended for you.</p>
        </div>
      </div>
    </div>



    
    <div class="po">

      <div class="card w-50">
        <div class="card-body">
          <h5 class="card-title"><input type="radio" name="payment_type" value="Paytm">&nbsp;Paytm</h5>
          <p class="card-text yu">This Card is Recommended for you.</p>
        </div>
      </div>
    </div>



    
    <div class="po">

      <div class="card w-50">
        <div class="card-body">
          <h5 class="card-title"><input type="radio" name="payment_type" value="Internet Banking">&nbsp;Internet Banking</h5>
          <p class="card-text yu">This Card is Recommended for you.</p>
        </div>
      </div>
    </div>


    
    <div class="po">

      <div class="card w-50">
        <div class="card-body">
          <h5 class="card-title"><input type="radio" name="payment_type" value="Master Card">&nbsp;Master Card</h5>
          <p class="card-text yu">This Card is Recommended for you.</p>
        </div>
      </div>
    </div>



  <div class="discount success">
    <p>Discount</p>
    <input class='form-control' type="text" name="discount" placeholder="Enter the Coupon Code" >
<br>
    <p>Credential_Id</p>
    <input class='form-control' type="text" name="Credential_Id" placeholder="Credential for selected radio button">
  <br>
  <p>Credential_Password:</p>
  <input class='form-control' type="text" name='Credential_Password' placeholder="Enter Credential Password">
  <br>
  </div>


    <div id="bu_pos">
      <input type="submit" class="btn btn-primary btn-block btn-lg" name='submit' value='Payment'>
  
    </div>

  </form>
  <!-- Form Ending-->
  <div class="container">

    <div class="row" id="div_placement">


      <?php

      echo "
    <div class='col-lg-4  col-sm-6'>
    <div class='thumbnail'>
      <div class='card' style='width: 18rem;'> 
    <img src=" . $_GET['p_image'] . " class='card-img-top' alt='...'>
    <div class='card-body'>
      <h5 class='card-title' style='font-weight:bold'>&nbsp;" . $_GET['p_name'] . "</h5><br>
      <p class='card-text'>" . $_GET['p_description'] . "</p>
    </div>
    <ul class='list-group list-group-flush'>
      <li class='list-group-item' style='text-decoration:line-through;'>Market Price : $" . $_GET['p_market_price'] . "</li>
      <li class='list-group-item'>Our Price : $" . $_GET['p_our_price'] . "</li>
    </ul>
  </div>
</div>
</div>";
      ?>



<?php
$num = $_GET['p_id'];
$p_id = (int) $num;

$query ="SELECT * FROM PRODUCT WHERE P_id='$p_id'";
$datan=mysqli_query($conn,$query);
if($result=mysqli_fetch_assoc($datan))
{
  $yy = $result['P_Our_Price'];
}
else{
  echo "Query Failed";
  echo("Error description: " . mysqli_error($conn));
}

echo "<h1 style='background:red;'>"."</h1>";

$Payment_Id = time();
$Delivery_Id = time()/2;




if($_GET['submit'])
{

  $Credential_Password = $_GET['Credential_Password'];

  $Credential_Id = $_GET['Credential_Id'];

  $Discount=$_GET['discount'];

  if($Discount == 'aman' || $Discount == 'basil'){
    $Discount=10;
  }else{
    $Discount=0;
  }

  $Payment_Type=$_GET['payment_type'];



	
   	$query ="INSERT INTO payment VALUES ('$Payment_Id','$yy','$Payment_Type','$Discount','$Credential_Id','$Credential_Password')";
    $data=mysqli_query($conn,$query);
		if($data)
		{
			echo "<p style='color:white;'>Data inserted into the database</p>";
    }
    else{
      echo "Query Failed";
      echo("Error description: " . mysqli_error($conn));
    }
	
}
?>
    
</body>
</html>
