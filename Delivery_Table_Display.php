<style>
td
{
	padding :10px
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
$query="SELECT * FROM DELIVERY";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total !=0)
{
	?>
	<table>
	    <tr>
		    <th>D_Id</th>
			<th>Email_Id</th>
			<th>D_Cost</th>
			<th>Payment_Id</th>
			<th colspan="2">Operations</th>
		</tr>
	
	<?php
	echo "<br/>";
	while($result=mysqli_fetch_assoc($data))
	{
		echo"<tr>
		    <td>".$result['D_Id']."</td>
			<td>".$result['Email_Id']."</td>
			<td>".$result['D_Cost']."</td>
			<td>".$result['Payment_Id']."</td>
			<td><a href='Delivery_Table_Update.php?D_Id=$result[D_Id]&Email_Id=$result[Email_Id]&D_Cost=$result[D_Cost]&Payment_id=$result[Payment_Id]'>Edit</a></td>
			<td><a href='Delivery_Table_Delete.php?D_id=$result[D_Id]' onclick='return checkdelete()'>Delete</a></td>
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

