<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Acme&family=Modak&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets1/css/styles.css">

        <title>Userdashboard</title>

    
  
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
      
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
      
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
    <title>Update</title>
    <style>
 div.one{
        margin-top:10px;
        margin-left:210px;
        text-align:left;
      }
    </style>
</head>
<body>
<div class="nav" id="navbar">
            <nav class="nav__container">
                <div>
                    <a href="userdash.php" class="nav__link nav__logo">
                       <i class='bx bxs-home-smile'></i> 
                        <span class="nav__logo-name">Home Genie</span>
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
                                        <a href="sellerprop.php" class="nav__dropdown-item">Add product</a>
                                        <a href="upsellertb.php" class="nav__dropdown-item">Update/Delete</a>
                                        
                                    </div>
                                </div>

                            </div>

                            <a href="cart.php" class="nav__link">
                                <i class='bx bx-library nav__icon' ></i> 
                                <span class="nav__name">product Listing</span>
                            </a>
                            <a href="myaccount.php" class="nav__link">
                                <i class='bx bx-bookmark nav__icon' ></i>
                                <span class="nav__name">Interested</span>
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

         
        <!--===== MAIN JS =====-->
        
<?php
$servername="localhost";
$username="root";
$password="";
$database="art_gallery";
$PID=$_GET['pid'];

$conn=new mysqli($servername,$username,$password,$database);
if(count($_POST)>0) {
//mysqli_query($conn,"update product set pid='$PID', seller_name='" . $_POST['seller_name'] . "', city='". $_POST['city'] . "', type_of_product='". $_POST['type_of_product'] . "',no_of_bedroom='" . $_POST['no_of_bedroom'] . "', no_of_bathroom='". $_POST['no_of_bathroom'] . "',other_rooms='". $_POST['other_rooms']. "', balconies='". $_POST['balconies'] . "', parking='" .$_POST['parking'] ."', total_no_of_floor='" .$_POST['total_no_of_floor'] ."', floor_no='" .$_POST['floor_no'] ."', availability_status='" .$_POST['availability_status'] ."', age_of_product='". $_POST['age_of_product'] . "', MobileNo='". $_POST['MobileNo'] . "',SIZE_OF_product='". $_POST['SIZE_OF_product'] . "',COST_OF_THE_product='". $_POST['COST_OF_THE_product'] . "',special_prop1='" .$_POST['special_prop1'] ."' where  pid='$PID'");
mysqli_query($conn,"update product set pid='{$PID}', pname='". $_POST['pname'] . "', artist_name='". $_POST['artist_name'] . "',pyear='" . $_POST['pyear'] . "', style='". $_POST['style'] . "',medium='". $_POST['medium']. "', subject='". $_POST['subject'] . "',price='" .$_POST['price'] ."', height='" .$_POST['height'] ."', width='" .$_POST['width'] ."', short_desc='". $_POST['short_desc'] . "', long_desc='". $_POST['long_desc'] . "',speciality='". $_POST['speciality'] . "'where  pid='$PID'");

 
// Redirect browser
//header("Location: http://localhost/project2/upsellertb.php");
 
//exit;

}
$result = mysqli_query($conn,"select * from product where pid='$PID'");
$r= mysqli_fetch_array($result);
?>

   
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
<h1>
 Update product</h1>



    
       <form name="myform"  action="" method="POST" enctype="multipart/form-data">
        <div class="container">
            <form class="form-horizontal" role="form">
                <br><br><br><h2>Add product Form</h2><br>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">product Id</label>
                    <div class="col-sm-9">
      <input type="text" id="pid" name="pid" placeholder="" class="form-control"  disabled value="<?php echo $r['pid']; ?>">
      </div>
                </div>
             
                <div class="form-group">
                    <label for="pname" class="col-sm-3 control-label">PAINTING NAME</label>
                    <div class="col-sm-9">
                        <input type="text" id="pname" name="pname" placeholder="Painting Name" class="form-control" autofocus  required="required" >
                        <span class="help-block">eg.: Mona Lisa </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="artist_name" class="col-sm-3 control-label">ARTIST NAME</label>
                    <div class="col-sm-9">
                        <input type="text" id="artist_name" name="artist_name" placeholder="Artist Name" class="form-control" autofocus  required="required" >
                        <span class="help-block">eg.: Leonardo Da Vinci</span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="pyear" class="col-sm-3 control-label">Year</label>
                    <div class="col-sm-9">
                        <input type="text" id="pyear" name="pyear" placeholder="Painting Year" class="form-control" autofocus  required="required" >
                        <span class="help-block">eg.: 1990</span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="style" class="col-sm-3 control-label">TYPES OF PAINTING STYLES </label>
                    <div class="col-sm-9">
                        <select id="style" name="style" class="form-control"  required="required" >
                            <option>select option</option>
                            <option value="Realism">Realism</option>
                            <option value="Photorealism">Photorealism</option>
                            <option value="Expressionism">Expressionism</option>
                            <option value="Impressionism">Impressionism</option>
                            <option value="Abstract">Abstract</option>
                            <option value="Surrealism">Surrealism</option>
                            <option value="Pop Art">Pop Art</option>
                            <option value="Other">Other</option>
                        
                        </select>
                    </div>
                </div> 
                <div class="form-group">
                    <label for="medium" class="col-sm-3 control-label">TYPES OF PAINTING MEDIUMS</label>
                    <div class="col-sm-9">
                        <select id="medium" name="medium" class="form-control" required="required">
                            <option>select option</option>
                            <option value="Oil">Oil </option>
                            <option value="Watercolour">Watercolour</option>
                            <option value="Acrylic">Acrylic</option>
                            <option value="Gouache">Gouache</option>
                            <option value="Pastel">Pastel</option>
                            <option value="Encaustic">Encaustic</option>
                            <option value="Fresco">Fresco</option>
                            <option value="Spray Paint">Spray Paint</option>
                            <option value="Digital">Digital</option>
                            <option value="Others">Others</option>
                        
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="subject" class="col-sm-3 control-label">TYPES OF PAINTING SUBJECTS</label>
                    <div class="col-sm-9">
                        <select id="subject" name="subject" class="form-control" required="required">
                            <option>select option</option>
                            <option value="History Painting">History Painting</option>
                            <option value="Portrait Art">Portrait Art</option>
                            <option value="Genre Painting">Genre Painting</option>
                            <option value="Landscape Painting">Landscape Painting</option>
                            <option value="Still Life Painting">Still Life Painting</option>
                            <option value="Others">Others</option>
                            
                        
                        </select>
                    </div>
                </div>   
                
                <div class="form-group">
                    <label for="price" class="col-sm-3 control-label">Price</label>
                    <div class="col-sm-9">
                        <input type="text" id="price" name="price" placeholder="Enter the price" class="form-control" autofocus  required="required" >
                        <span class="help-block">eg.: $71</span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="height" class="col-sm-3 control-label">PAINTING HEIGHT</label>
                    <div class="col-sm-9">
                        <input type="text" id="height" name="height" placeholder="height" class="form-control" autofocus  required="required" >
                        <span class="help-block">In Centimeter</span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="width" class="col-sm-3 control-label">PAINTING WIDTH</label>
                    <div class="col-sm-9">
                        <input type="text" id="width" name="width" placeholder="width" class="form-control" autofocus  required="required" >
                        <span class="help-block">In Centimeter</span>
                    </div>
                </div>

            

        <br><div class="form-group">
        <label for="short_desc" class="col-sm-3">SHORT DISCRIPTION</label>
        <textarea class="form-control"  name="short_desc" rows="3" cols="6" style="height:auto"></textarea>
        </div>
    

    <div class="form-group">
        <label for="long_desc" class="col-sm-3">LONG DISCRIPTION</label>
        <textarea class="form-control"  name="long_desc" rows="3" cols="6" style="height:auto"></textarea>
        </div>
    

    

        <div class="form-group">
        <label for="speciality" class="col-sm-3">Speciality of your painting</label>
        <textarea class="form-control"  name="speciality" rows="3" cols="6" style="height:auto"></textarea>
        </div>
    
        <!-- <div class="form-group " >
            <label for="images" class="col-sm-3">Upload Painting Picture</label>
            <input type="file" id="images"   name="images" multiple/>
        </div> -->

      <div class="one">
      <button type="submit" name="submit" value="submit" onclick="checkupdate()" class="btn btn-success active">Submit</button>
  </div>

      
            

<br>
<br>


            
   

    <script>
  function checkupdate()
  {
    return confirm('Your record has been updated sucessfully')
  }

</script>
        </form>

<script src="assets1/js/main.js"></script>
</body>
</html>