<?php
$servername = "localhost";
$username = "root";
$password = "";
$link = mysqli_connect("localhost", "root", "", "art_gallery");
if($conn->connect_error)
   die("connection failed ".$conn->connect_error);
  else
   echo "<br> connection successful";
 
  mysqli_close($conn); 
 ?>
