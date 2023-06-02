<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicare";
session_start();
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle the image and location data
$name=$_POST['name'];
$number=$_POST['number'];
$address=$_POST['address'];
$zip=$_POST['zip'];
$image = $_FILES['image'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

$target_dir = "images/";
$target_file = $target_dir .uniqid()."jpg";

if (move_uploaded_file($image["tmp_name"], $target_file)) {
  // Store the image file path and location data in the database
  $sql = "INSERT INTO images (name,number,address,zip,image_path, longitude, latitude) VALUES ('$name','$number','$address','$zip','$target_file', '$longitude', '$latitude')";
  if (mysqli_query($conn, $sql)) {
    header('location:d_list.php?message=success2');
    echo "<script>alert('your request is succesfully submited');</script>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>
