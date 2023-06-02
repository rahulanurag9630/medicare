<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicare";


session_start();
// Create connection
$data = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($data==false) {
  die("Connection failed: " );
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $email=$_POST["email"];
    $password=$_POST["pass"];

    $sql="select * from registration where email='".$email."' AND rpass='".$password."'";
    
    $results=mysqli_query($data,$sql);
    $row=mysqli_fetch_assoc($results);
    
    if($row["email"]=="$email")
    { $_SESSION["email"]=$email;
        
        header("location:viewloc.php?msg=success");
    
        
    }
    else{
        header("location:login.php?msg=wrong");

    }

   
}


?>