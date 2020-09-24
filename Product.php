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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        body{
            background:url('form_background.jpg');
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
    </style>
</head>
<body>
<div class="divform bg-primary"> 
<div class="form-group">
<h1 style="text-shadow: 5px 5px 10px black !important;text-align:center">Add New Product</h1>
<form action="" method="POST" enctype="multipart/form-data">
    Product_Id : <input class="form-control" type="text" name="P_id" value="" requried><br>
    Product_Name : <input class="form-control" type="text" name="P_Name" value="" required><br>
    Product_Description : <input class="form-control" type="text" name="P_Description" value="" required><br>
    Product_Market_price : <input class="form-control" type="text" name="P_Market_Price" value="" required><br>
    Product_Our_price : <input class="form-control" type="text" name="P_Our_Price" value="" required><br>
    Product_Image: <input class="form-control"  type="file" name="P_image" value="" required><br>
    <input type="submit" name="submit"  value="Submit" class="btn btn-primary">
    </div>
</form>


</div>

<!-- <a href="">######</a> -->
<?php
$p_id = $_POST['P_id'];
$p_name = $_POST['P_Name'];
$p_description = $_POST['P_Description'];
$p_market_price = $_POST['P_Market_Price'];
$p_our_price = $_POST['P_Our_Price'];
$p_image = $_POST['P_image'];
$filename = $_FILES["P_image"]["name"];
$tempname = $_FILES["P_image"]["tmp_name"];
$folder = 'image_tshirt/'.$filename;
move_uploaded_file($tempname,$folder);

$query = "INSERT INTO PRODUCT VALUES ('$p_id','$p_name','$p_description','$p_market_price','$p_our_price','$folder','0')";
$data = mysqli_query($conn,$query);
if($data){
    echo "<b><p style='text-shadow: 10px 10px 10px black !important;color:white;text-align:center'>Data inserted into Database</p></b>";
    ?>

    <META HTTP-EQUIV="refresh" CONTENT="0; URL='http://localhost/aman_goel/ADMIN_DBMS_project.php'">
    <?php
}else{
    echo "Error";
}
?>
</body>
</html>
