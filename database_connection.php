<?php



 $conn=new mysqli("localhost","root","","art_gallery");
  if($conn->connect_error)
   die("connection failed ".$conn->connect_error);
  else
  	echo "Connected successfully";

?>