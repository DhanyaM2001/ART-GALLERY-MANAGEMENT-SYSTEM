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
  
// $images = $row['images'];
// $seller_name=$row['seller_name'];
// $availability_status=$row['availability_status'];
// $city=$row['city'];
// $special_prop1=$row['special_prop1'];
// $type_of_property=$row['type_of_property'];
// $no_of_bedroom=$row['no_of_bedroom'];
//   $no_of_bathroom=$row['no_of_bathroom'];
//   $other_rooms=$row['other_rooms'];
//   $balconies=$row['balconies'];
//   $parking=$row['parking'];
//   $total_no_of_floor=$row['total_no_of_floor'];
//   $floor_no=$row['floor_no'];
//   $age_of_property=$row['age_of_property'];

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

    /* Basic Styling */
html, body {
  height: 100%;
  width: 100%;
  margin: 0;
  font-family: 'Roboto', sans-serif;
}
 
.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 15px;
  display: flex;
}
/* Basic Styling */
.left-column {
  width: 65%;
  position: relative;
}
 
.right-column {
  width: 40%;
  margin-top: 60px;
}
.left-column img {
  width: 85%;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
  transition: all 0.3s ease;
}
 
.left-column img.active {
  opacity: 1;
}
.product-description {
  border-bottom: 1px solid #E1E8EE;
  margin-bottom: 20px;
}
.product-description span {
  font-size: 12px;
  color: #358ED7;
  letter-spacing: 1px;
  text-transform: uppercase;
  text-decoration: none;
}
.product-description h1 {
  font-weight: 300;
  font-size: 52px;
  color: #43484D;
  letter-spacing: -2px;
}
.product-description h1 {
  font-weight: 200;
  font-size: 45px;
  color: #43484D;
  letter-spacing: -2px;
  }
.product-description p {
  font-size: 16px;
  font-weight: 300;
  color: #86939E;
  line-height: 24px;
}
.product-color {
  margin-bottom: 30px;
}
 
.color-choose div {
  display: inline-block;
}
 
.color-choose input[type=&amp;quot;radio&amp;quot;] {
  display: none;
}
 
.color-choose input[type=&amp;quot;radio&amp;quot;] + label span {
  display: inline-block;
  width: 40px;
  height: 40px;
  margin: -1px 4px 0 0;
  vertical-align: middle;
  cursor: pointer;
  border-radius: 50%;
}
 
.color-choose input[type=&amp;quot;radio&amp;quot;] + label span {
  border: 2px solid #FFFFFF;
  box-shadow: 0 1px 3px 0 rgba(0,0,0,0.33);
}
 
.color-choose input[type=&amp;quot;radio&amp;quot;]#red + label span {
  background-color: #C91524;
}
.color-choose input[type=&amp;quot;radio&amp;quot;]#blue + label span {
  background-color: #314780;
}
.color-choose input[type=&amp;quot;radio&amp;quot;]#black + label span {
  background-color: #323232;
}
 
.color-choose input[type=&amp;quot;radio&amp;quot;]:checked + label span {
  background-image: url(images/check-icn.svg);
  background-repeat: no-repeat;
  background-position: center;
}

.cable-choose {
  margin-bottom: 20px;
}
 
.cable-choose button {
  border: 2px solid #E1E8EE;
  border-radius: 6px;
  padding: 13px 20px;
  font-size: 14px;
  color: #5E6977;
  background-color: #fff;
  cursor: pointer;
  transition: all .5s;
}
button{
border: 2px solid #E1E8EE;
  border-radius: 6px;
  padding: 13px 20px;
  font-size: 14px;
  color:white;
  background-color:#CCEEFF;
  cursor: pointer;
  transition: all .5s;
} 
.cable-choose button:hover,
.cable-choose button:active,
.cable-choose button:focus {
  border: 2px solid #86939E;
  outline: none;
}
 
.cable-config {
  border-bottom: 1px solid #E1E8EE;
  margin-bottom: 20px;
}
 
.cable-config a {
  color: #358ED7;
  text-decoration: none;
  font-size: 12px;
  position: relative;
  margin: 10px 0;
  display: inline-block;
}
.cable-config a:before
  content: &amp;quot;?&amp;quot;;
  height: 15px;
  width: 15px;
  border-radius: 50%;
  border: 2px solid rgba(53, 142, 215, 0.5);
  display: inline-block;
  text-align: center;
  line-height: 16px;
  opacity: 0.5;
  margin-right: 5px;
  .product-price {
  display: flex;
  align-items: center;
}
 
.product-price span {
  font-size: 26px;
  font-weight: 300;
  color: #43474D;
  margin-right: 20px;
}
 
.cart-btn {
  display: inline-block;
  background-color:white;
  border-radius: 6px;
  font-size: 16px;
  color:white ;
  text-decoration: none;
  padding: 12px 30px;
  transition: all .5s;
}
.cart-btn:hover {
  background-color:blue;
}
  </style>
</head>
<body>
  <div class="nav" id="navbar">
            <nav class="nav__container">
                <div>
                    <a href="userdash.php" class="nav__link nav__logo">
                    <i><image src="images/1077629.png" height="25%" width="30%">
                        <span class="nav__logo-name">Artistry</span></i>
                    </a>
    
                    <div class="nav__list">
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Profile</h3>
    
                            <a href="userdashboard.php" class="nav__link active">
                                <i class='bx bx-home nav__icon' ></i>
                                <span class="nav__name">Home</span>
                            </a>
                            
                            <div class="nav__dropdown">
                                <a href="userviewprofile.php" class="nav__link">
                                    <i class='bx bx-user nav__icon' ></i>
                                    <span class="nav__name">Profile</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="userviewprofile.php" class="nav__dropdown-item">View Profile</a>
                                        <a href="userupdateprofile.php" class="nav__dropdown-item">Update Profile</a>
                                        <a href="changepass.php" class="nav__dropdown-item">Change Password</a>
                                    </div>
                                </div>
                            </div>

                            <a href="feed.php" class="nav__link">
                                <i class='bx bx-message-rounded nav__icon' ></i>
                                <span class="nav__name">Feedback</span>
                            </a>
                        </div>
    
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Menu</h3>
    
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-bell nav__icon' ></i>
                                    <span class="nav__name">Seller</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="sellerprop.php" class="nav__dropdown-item">Add Property</a>
                                        <a href="upsellertb.php" class="nav__dropdown-item">Update/Delete</a>
                                        
                                    </div>
                                </div>

                            </div>

                            <a href="cart.php" class="nav__link">
                                <i class='bx bx-library nav__icon' ></i> 
                                <span class="nav__name">Property Listing</span>
                            </a>
                            <a href="myaccount.php" class="nav__link">
                                <i class='bx bx-bookmark nav__icon' ></i>
                                <span class="nav__name">Interested</span>
                            </a>

                             <a href="usersideb1.php" class="nav__link">
                                <i class='bx bx-bookmark nav__icon' ></i>
                                <span class="nav__name">News</span>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="home.html" class="nav__link nav__logout">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>
   
    
    
 

<main class="container">
 
  <!-- Left Column / Headphones Image -->
  <div class="left-column">
   
     <img src="<?php echo "http://localhost/".$images?>"class="active"  alt="">
  </div>
 
 
  <!-- Right Column -->
  <div class="right-column">
 
    <!-- Product Description -->
    <div class="product-description">
      <span>Product details</span>
      
      <!-- $pname = $row["pname"];
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
    $images = $row['image']; -->




    
      <h1>Name: <?php echo $pname?></h1>
      <h2>Artist Name: <?php echo $artist_name?></h2>
      <h3>Seller Name: <?php echo $name?></h3>
     
     <p>Year:<?php  echo $pyear?></p>
     <p>Style:<?php echo $style?></p>
     <p>Price:<?php echo $price?></p>
<h2>
 <a href=buypage.php?pid=<?php echo $pid; ?> >Buy this...</a>
</h2>
     <!-- <p>Medium:<?php echo $medium?></p>
      <p>Subject:<?php echo $subject?></p>
      <p>Price:<?php echo $price?></p>
      <p>Height<?php echo $height?></p>
      <p>Width:<?php echo $width?></p>
      <p>Short_desc:<?php echo $short_desc?></p>
      <p>Long_desc:<?php echo $long_desc?></p>
      <p>Speciality:<?php echo $speciality?></p>-->
      
      
      
	 <?php   $pid=$_GET["pid"]; ?>
	  <p><h1> <a href=pdetails1.php?pid=<?php echo $pid; ?> >View More Details</a></h1> </p>
    </div>
 
    <!-- Product Configuration 
    <div class="product-configuration">
 
      
      <div class="product-color">
        <span>Color</span>
 
       < <div class="color-choose">
          <div>
            <input data-image="red" type="radio" id="red" name="color" value="red" checked>
            <label for="red"><span></span></label>
          </div>
          <div>
            <input data-image="blue" type="radio" id="blue" name="color" value="blue">
            <label for="blue"><span></span></label>
          </div>
          <div>
            <input data-image="black" type="radio" id="black" name="color" value="black">
            <label for="black"><span></span></label>
          </div>
        </div>

 
      </div>
 -->
      <!-- Cable Configuration -->
   <!--   <div class="cable-config">
        <span>Cable configuration</span>
 
        <div class="cable-choose">
          <button>Straight</button>
          <button>Coiled</button>
          <button>Long-coiled</button>
        </div>
 
        <a href="#">How to configurate your headphones</a>
      </div>
    </div>
 -->
    <!-- Product Pricing -->
    <div class="product-price">
     
    
<a href="http://localhost/project2/pdetails.php?pid=<?php echo $pid; ?>&user_id=<?php echo $_SESSION['user_id']; ?>" button class="button button3" >INTERESTED </a>

     
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