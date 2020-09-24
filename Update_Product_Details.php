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
        margin-top:30px;
        border:1px solid black;
        padding:20px;
        padding-left:30px;
        padding-right:30px;
        background:grey;
    }
    </style>
</head>
<body>
<div class="divform bg-primary"> 
    <h1 style="text-shadow: 10px 10px 10px black !important;text-align:center;">Product Updation</h1>
<form action="" method="POST" enctype="multipart/form-data">
    <br><br>
    <div class="form-group">
    Product_Id :<input class="form-control" type="text" name="P_id" value="<?php echo $_GET['p_id']; ?>" requried ><br>
    Product_Name : <input class="form-control" type="text" name="P_Name" value="<?php echo $_GET['p_name']; ?>" required><br>
    Product_Description : <input class="form-control" type="text" name="P_Description" value="<?php echo $_GET['p_description']; ?>" required><br>
    Product_Market_price : <input class="form-control" type="text" name="P_Market_Price" value="<?php echo $_GET['p_market_price']; ?>" required><br>
    Product_Our_price : <input  class="form-control" type="text" name="P_Our_Price" value="<?php echo $_GET['p_our_price']; ?>" required><br>
    Product_Image: <input class="form-control" type="file" name="P_image" value="<?php echo $_GET['p_image']; ?>" required><br>
    <input type="submit" name="submit"  value="Update" class="btn-primary">
    </div>
   
</form>
</div>


<!-- <a href="">######</a> -->
<?php
if($_POST['submit']){

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
   

$query = "UPDATE PRODUCT SET P_Name='$p_name',P_Description='$p_description',P_Market_Price='$p_market_price',P_Our_Price='$p_our_price',P_image='$folder' where P_id='$p_id'";
$data = mysqli_query($conn,$query);

if($data){
    echo "<b><p style='text-shadow: 10px 10px 10px black !important;color:white;text-align:center'>Record Updated Succesfully</p></b>";
    echo "<b><p style='text-shadow: 10px 10px 10px black !important;color:white;text-align:center'><a href='ADMIN_DBMS_project.php'>Check the Update Content ON Admin Page</a></p></b>";
    ?>

    <META HTTP-EQUIV="refresh" CONTENT="0; URL='http://localhost/aman_goel/ADMIN_DBMS_project.php'">
    <?php
}else{
    echo "<b><p style='text-shadow: 10px 10px 10px black !important;color:white;text-align:center'>Record Not Updated Successfully</p></b>";
}

}else{
    echo "<p style='text-align:center;color:white;text-shadow: 5px 5px 10px black !important;'>Click on Update Button to Save the changes</p>";
}

?>
</body>
</html>