<?php
session_start();

$conn=new mysqli("localhost","root","","art_gallery");
if($conn->connect_error)
die("connection failed".$conn->connect_error);
 else
     echo" ";
if(isset($_GET['pid']))
 {

  $pid=$_GET['pid'];
  $sql = "SELECT * from product WHERE pid='$pid'";

$result = mysqli_query($conn , $sql);
if(mysqli_num_rows($result) > 0){

while($row = mysqli_fetch_assoc($result))
{
  
   //$target = "project2/images/" . basename($_FILES['images']['name']);
    $user_id=$row["user_id"];
    $admin_id=$row["admin_id"];
    $pname = $row["pname"];
    $artist_name = $row["artist_name"];
    $pyear = $row["pyear"];
    $style = $row["style"];
    $medium = $row["medium"];
    $subject = $row["subject"];
    $price = $row["price"];
    $height = $row["height"];
    $width = $row["width"];
    $short_desc = $row["short_desc"];
    $long_desc = $row["long_desc"];
    $speciality = $row["speciality"];
    $images = $row['image'];

    //$images = "project2/images/" . $_FILES['images']['name'];
    
    $check=($row["user_id"] != NULL);
    if($check){
      $seller=$row["user_id"];
       
      $sql1 = "SELECT * from user_reg WHERE user_id='$seller'";
      $result1 = mysqli_query($conn , $sql1);

      if(mysqli_num_rows($result1) > 0)
      {

      while($row1 = mysqli_fetch_assoc($result1))
      {
          $email_id = $row1['email_id'];
          $mobile_no = $row1['mobile_no'];
          $name = $row1['name'];
      }
      }


}
else {
  $seller=$row["admin_id"];  

  $sql2 = "SELECT * from admin_reg WHERE admin_id='$seller'";
      $result2 = mysqli_query($conn , $sql2);

      if(mysqli_num_rows($result2) > 0)
      {

      while($row2 = mysqli_fetch_assoc($result2))
      {
          $email_id = $row2['admin_email_id'];
          $mobile_no = $row2['admin_mobile_no'];
          $name = $row2['adname'];
      }
      }

}


}
}
 }
?>
<?php


if(isset($_GET['user_id']))     
            {
                 $user_id=$_GET['user_id'];
                 date_default_timezone_set('Asia/Kolkata');
                 $date = date('d-m-y h:i:s');
                /* echo $date;
                /*$time=date("d-m-Y");*/

                $sql="insert into interested values ('".$user_id."',".$pid.",'".$date."')";
                if($conn->query($sql)==TRUE)
    echo "YOUR INTERESTED IS RECORDED";
  else
    echo"error:".$sql."<br>" .$conn->error;
                          }
                        
                 mysqli_close($conn);
                ?> 


    

                                
           
 


<html>
<head>
  <head>
   <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets1/css/styles.css">

        <title>Userdashboard</title>
        <style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
    
    
 

<main class="container">
 
  <!-- Left Column / Headphones Image 
  <div class="left-column">
   
    // <img src="<?php echo "http://localhost/".$images?>"class="active"  alt="">
  </div>
 
 -->
  <!-- Right Column -->
  <div class="right-column">
 
    <!-- Product Description -->
    <div class="product-description">
      <span>Product details</span>
      
      




    
      <h1>Name: <?php echo $pname?></h1>
      <h2>Artist Name: <?php echo $artist_name?></h2>
      <h3>Seller Name: <?php echo $name?></h3>
     
     <p>Year:<?php  echo $pyear?></p>
     <p>Style:<?php echo $style?></p>
     <p>Price:<?php echo $price?></p>
     <p>Height<?php echo $height?></p>
      <p>Width:<?php echo $width?></p>
      <p>Short_desc:<?php echo $short_desc?></p>
     <!-- <p>Medium:<?php echo $medium?></p>
      <p>Subject:<?php echo $subject?></p>
      <p>Price:<?php echo $price?></p>
      <p>Height<?php echo $height?></p>
      <p>Width:<?php echo $width?></p>
      <p>Short_desc:<?php echo $short_desc?></p>
      <p>Long_desc:<?php echo $long_desc?></p>
      <p>Speciality:<?php echo $speciality?></p>-->
      
      

<form>
      </div>
              
              <div class="col-50">
               <label for="zip">Email Id </label>
               <input type="text" name="g" id="g"  required >
             </div>
           </div>
       
       <label>
         <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
       </label>
       <input type="submit" value="Continue to checkout" name="Submit" class="btn">

</form>



<?php include "dbcon.php" ?>
      <?php 



if (isset($_POST['Submit']))
{
    $g=$_POST["g"];

$sql="select * from user_reg where  email_id='{$g}'";

$found=0;
$result=$con->query($sql);
if($result ->num_rows == 1)
{	
	$found=1;
}
	
	if($found==1)
	{
	
	
$query = "insert into order values('$price','$pname,'$g')";


//echo $query;
mysqli_query($con,$query);
	//$msg="Plan Registered Successfully..." ;
		//echo "<script type='text/javascript'> window.alert ('$msg');</script>";
		
		echo '<script>alert("Successful...");window.location="login.html";</script>';
        //header('Location:paybill.php?amt='.$price);
	
}
else
{
echo '<script>alert("Sorry ,Invalid Email-id,Please Register with Us...");window.location="ViewPlan_Details1new.php";</script>';
}


header('Location:paybill.php?amt='.$price);
		
}
?>











      
	 <?php   $pid=$_GET["pid"]; ?>
	  
    </div>
 
    <!-- Product Pricing -->
    <div class="product-price">
     
    


     
    </div>
  </div>
</main>
<script src="assets1/js/main.js"></script> 
<script>
$(document).ready(function() {
 
  $('.color-choose input').on('click', function() {
      var headphonesColor = $(this).attr('data-image');
 
      $('.active').removeClass('active');
      $('.left-column img[data-image = ' + headphonesColor + ']').addClass('active');
      $(this).addClass('active');
  });
 
});

</script>

   


</body>
</html>