<?php
$servername="localhost";
$username="root";
$password="";
$database="art_gallery";

$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
	die("connection failed <br>" .$conn->connect_error);
}
else{
	echo"connection success <br>";
}
$PID=$_GET['pid'];
$query=mysqli_query($conn,"delete from product where pid='$PID'");
$data=mysqli_query($conn,"delete from interested where pid='$PID'");

//$data=mysqli_query($conn,$query);
if($query)
{
	echo"record deleted from database";
}
else
{
	echo"failed to deleted record from database";
}
header("location:upsellertb.php");
echo"<script>alert('record deleted from database')</script>"
?>