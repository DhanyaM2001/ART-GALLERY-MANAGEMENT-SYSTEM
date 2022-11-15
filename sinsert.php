<html>

<body>
  <?php
  session_start();

  if (isset($_SESSION['user_id']) && isset($_POST['submit'])) {

    $user_id = $_SESSION['user_id'];
    $target = "project2/images/" . basename($_FILES['images']['name']);
    $pname = $_POST["pname"];
    $artist_name = $_POST["artist_name"];
    $pyear = $_POST["pyear"];
    $style = $_POST["style"];
    $medium = $_POST["medium"];
    $subject = $_POST["subject"];
    $price = $_POST["price"];
    $height = $_POST["height"];
    $width = $_POST["width"];
    $short_desc = $_POST["short_desc"];
    $long_desc = $_POST["long_desc"];
    $speciality = $_POST["speciality"];
    
    $images = "project2/images/" . $_FILES['images']['name'];

  
  }
  $conn = new mysqli("localhost", "root", "", "art_gallery");
  if ($conn->connect_error)
    die("connection failed" . $conn->connect_error);
  else
    echo " ";
    $sql = "INSERT INTO product(user_id,pname,artist_name,pyear,style,medium,subject,price,height,width,image,short_desc,long_desc,speciality) VALUES ('" . $user_id . "','" . $pname . "','" . $artist_name . "','" . $pyear . "','" . $style . "','" . $medium . "','" . $subject . "','" . $price . "','" . $height . "','" . $width . "','" . $images . "','" . $short_desc . "','" . $long_desc . "','" . $speciality . "')";
  if (mysqli_query($conn,$sql)){
    echo  "<script>alert('Report uploaded successfully!')</script>";
    echo "<script>location.replace('sellerprop.php')</script>";
  }
?>
</body>

</html>