<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicare";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$zip=$_POST['zip'];
$pass=$_POST['pass'];
$rpass=$_POST['rpass'];

$sql = "INSERT INTO registration (name,email,address,phone,zip,pass,rpass)
VALUES ('$name','$email','$address','$phone','$zip','$pass','$rpass')";

if ($conn->query($sql)==TRUE) {
   
     header('location:login.php?message=success');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>