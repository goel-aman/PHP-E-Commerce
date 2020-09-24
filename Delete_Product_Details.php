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
<?php

$p_id = $_GET['p_id'];
$query = "DELETE FROM PRODUCT WHERE P_id='$p_id'";
$data = mysqli_query($conn,$query);
if($data){
echo "Record deleted from table";
?>
<META HTTP-EQUIV="refresh" CONTENT="0; URL='http://localhost/aman_goel/ADMIN_DBMS_project.php'">
<?php
}else{
echo "Sorry Failed";
}

?>