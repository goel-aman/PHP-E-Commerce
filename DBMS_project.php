<?php

$servername= "localhost";
$username = "root";
$password = "";
$dbname = "Project";

 
$conn = mysqli_connect($servername,$username,$password,$dbname);


if($conn){


}else{
die("connection failed because".mysqli_connect_error());
}
error_reporting(0);

$query = "SELECT * FROM PRODUCT";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
echo $result;



$a = $total;

// while($result = mysqli_fetch_assoc($data)){
//     echo $result['P_id']."".$result['P_Name']."<br>";
// }


?>





<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    .footer {
      width: 100%;
      background-color: rgb(65, 60, 60);
      color: white;
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

    /* div img:hover {
      transform: scale(1.5);
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    } */
    .strike {
      text-decoration: line-through !important;
    }

    img {
      height: 300px;
      width: 345px;
    }

    .jumbotron {
      color: #2c3e50 !important;
    }
  </style>
  <title>Mini project</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="sytlesheet" type="text/css" href="galleryk.css">

</head>

<body>
<div id="top"></div>
  <nav class="navbar navbar-inverse  navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
          data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="DBMS_project.php" class="navbar-brand"><span class="glyphicon glyphicon-picture"
            aria-hidden="true"></span>&nbsp;E-Tshirts.com</a>
      </div>
      <div class="nav navbar-nav">
        <li>
          <a href="ADMIN_DBMS_project.php">Admin</a>
        </li>
        <li>
          <a href="#">Contact</a>
        </li>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
        <li><a href="Cart.php">Cart</a></li>
          <li><a href="Customer_Table_Form.php">SingUP</a></li>
          <li><a href="#">Login In</a></li>
       
        </ul>
      </div>

    </div>
  </nav>

  <div class="container">
    <div class="jumbotron">
      <h1><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> The Tshirt World</h1>
      <p>A place where you fall in love with Tshirts</p>
    </div>
    <div class="row">
     
<?php
while($result = mysqli_fetch_assoc($data)){
    echo "
    <div class='col-lg-4  col-sm-6'>
    <div class='thumbnail'>
      <div class='card' style='width: 18rem;'> 
    <img src=".$result['P_image']." class='card-img-top' alt='...'>
    <div class='card-body'>
      <h5 class='card-title' style='font-weight:bold'>&nbsp;".$result['P_Name']."</h5><br>
      <p class='card-text'>".$result['P_Description']."</p>
    </div>
    <ul class='list-group list-group-flush'>
      <li class='list-group-item' style='text-decoration:line-through;'>Market Price : $".$result['P_Market_Price']."</li>
      <li class='list-group-item'>Our Price : $".$result['P_Our_Price']."</li>
      <li class='list-group-item'>
      <a class='btn btn-success' href='Payment.php?p_id=$result[P_id]&p_name=$result[P_Name]&p_description=$result[P_Description]&p_market_price=$result[P_Market_Price]&p_our_price=$result[P_Our_Price]&p_image=$result[P_image]'>Buy Now</a>
      </li>
    </ul>
  </div>
</div>
</div>";
}
?>

    </div>
  </div>

  <!-- Footer of the Website   = == ===  = = = == = = = = == = =  = ==  == =  = == = = = =-->

  <div class="footer" style="margin:0px;padding:0px;">
    <div style="padding-left:30px;padding-top:40px;padding-bottom:50px">
      <a href="#top" style="padding-left:700px;font-size:30px;">Back to Top</a>
        <p>Get to Know Us</p>
        <p>About Us</p>
        <p>Careers</p>
        <p>Press Release</p>
        <p>E-Tshirt Cares</p>
        <p>Gift a smile</p>
        <p style="margin:0px;">alkdsfjadsl;k</p>
    </div>
    
  </div>



  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>