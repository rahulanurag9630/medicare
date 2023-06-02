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
$msg=$_POST['msg'];


$sql = "INSERT INTO contact (name,email,msg)
VALUES ('$name','$email','$msg')";

if ($conn->query($sql)==TRUE) {
   
     header('location:index.php?msg=success1');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>