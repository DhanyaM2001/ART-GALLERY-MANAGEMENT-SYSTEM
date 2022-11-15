 <html>

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!--========== BOX ICONS ==========-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

     <!--========== CSS ==========-->
     <link rel="stylesheet" href="assets1/css/styles.css">

     <title>Userdashboard</title>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
     </script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
     </script>

     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
     </script>
     <style>
         div.one {
             margin-top: 10px;
             margin-left: 210px;
             text-align: left;
         }
         
     </style>
 </head>

 <body>
     <div class="nav" id="navbar">
         <nav class="nav__container">
             <div>
                 <a href="userdashboard.php" class="nav__link nav__logo">
                 <i><image src="images/1077629.png" height="25%" width="30%">
                        <span class="nav__logo-name">Artistry</span></i>
                 </a>

                 <div class="nav__list">
                     <div class="nav__items">
                         <h3 class="nav__subtitle">Profile</h3>

                         <a href="userdashboard.php" class="nav__link active">
                             <i class='bx bx-home nav__icon'></i>
                             <span class="nav__name">Home</span>
                         </a>

                         <div class="nav__dropdown">
                             <a href="userviewprofile.php" class="nav__link">
                                 <i class='bx bx-user nav__icon'></i>
                                 <span class="nav__name">Profile</span>
                                 <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                             </a>

                             <div class="nav__dropdown-collapse">
                                 <div class="nav__dropdown-content">
                                     <a href="userviewprofile.php" class="nav__dropdown-item">View Profile</a>
                                     <a href="userupdateprofile.php" class="nav__dropdown-item">Update Profile</a>

                                 </div>
                             </div>
                         </div>

                         <a href="feed.php" class="nav__link">
                             <i class='bx bx-message-rounded nav__icon'></i>
                             <span class="nav__name">Feedback</span>
                         </a>
                     </div>

                     <div class="nav__items">
                         <h3 class="nav__subtitle">Menu</h3>

                         <div class="nav__dropdown">
                             <a href="#" class="nav__link">
                                 <i class='bx bx-bell nav__icon'></i>
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
                             <i class='bx bx-library nav__icon'></i>
                             <span class="nav__name">Property Listing</span>
                         </a>
                         <a href="myaccount.php" class="nav__link">
                             <i class='bx bx-bookmark nav__icon'></i>
                             <span class="nav__name">Interested</span>
                         </a>
                         <a href="usersideb1.php" class="nav__link">
                             <i class='bx bx-bookmark nav__icon'></i>
                             <span class="nav__name">News</span>

                         </a>
                     </div>
                 </div>
             </div>

             <a href="index.html" class="nav__link nav__logout">
                 <i class='bx bx-log-out nav__icon'></i>
                 <span class="nav__name">Log Out</span>
             </a>
         </nav>
     </div>



     <!--===== MAIN JS =====-->


     <form  name="myform" onsubmit="return validation()" action="sinsert.php" method="POST" enctype="multipart/form-data">

         <div class="container" id="myform1">
             <form class="form-horizontal" role="form">
                 <br><br><br>
                 <h2>Add Property Form</h2><br>



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
                            <option value="Pop Art">Pencil sketch</option>
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
    
        <div class="form-group " >
            <label for="images" class="col-sm-3">Upload Painting Picture</label>
            <input type="file" id="images"   name="images" multiple/>
        </div>
             </div>
                     <div class="one">
                         <button type="submit" name="submit" value="submit" class="btn btn-success active">Submit</button>
                     </div>

             </form>
             <script>
                 var img = document.forms['myform']['images'];
                 var validExt = ["jpeg", "png", "jpg"];

                 function validation() {
                     if (img.value != '') {
                         var img_ext = img.value.substring(img.value.lastIndexOf('.') + 1);
                         var result = validExt.includes(img_ext);
                         if (result == false) {
                             alert("selected files is not an image...");
                             return false;
                         } else {
                             if (parseFloat(img.files[0].size / (1024 * 1024)) >= 3) {
                                 alert("Files size must be smaller than 3 mb");
                             }
                         }
                     } else {
                         alert("no image is selected...");
                         return false;
                     }
                 }
             </script>
         </div>
     </form>
     <script src="assets1/js/main.js"></script>

 </body>
 </head>