<?php
  $conn=new mysqli("localhost","root","","art_gallery");
if($conn->connect_error)
	die("connection failed".$conn->connect_error);
else
 echo" ";

      $user_id=$_POST['user_id'];
      $query="SELECT * FROM user_reg where user_id='$user_id'";
      $query_run=mysqli_query($conn,$query);
	  $row=mysqli_fetch_array($query_run);
	  ?>

      <?php
      if(isset($_POST['submit'])){
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];

      $user_id=$_POST["user_id"];
	$sql="SELECT * FROM user_reg WHERE user_id='$user_id'";
	$result=mysqli_query($conn,$sql); 
	$row=mysqli_fetch_array($result);
	if($row["user_id"] == $user_id){
   
		
		 $sql = "UPDATE user_reg SET password='$password',confirmpassword='$confirmpassword' where user_id='$user_id'";
                  if (mysqli_query($conn,$sql))
	              echo  "<script>alert('Password changed successfully!')</script>";
                   echo "<script>location.replace('login.html')</script>";
	}
    	
else{
		echo  "<script>alert('Your Username is incorrect. Please try again')</script>";
        echo "<script>location.replace('changepswd.php')</script>";
		
}
}
?>
