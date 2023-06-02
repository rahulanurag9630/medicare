<?php 

session_start();
$email=$_SESSION["email"];
$host="localhost";
$db_user="root";
$db_password="";
$db_name="medicare";
$conn=mysqli_connect($host,$db_user,$db_password,$db_name)or die("connection error". mysqli_connect_error());
if($conn){


$sql="SELECT * FROM `registration` where email='".$email."'";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/CareerAbout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>your profile</title>
    <style>
        table{
            padding: 30px ;
            padding-left: 40px;
            font-size: 30px;
            text-align: left;
            margin-left: 200px;
            border-collapse: collapse;
            width: 50%;
            background-color: white;
            border-color:white;
            border-radius: 15px;
        }
         th ,td{
            text-align: left;
            padding: 8px;
            border-radius: 15px;
        }
        tr:nth-child(even){
           
        }
        th{
          
        }
        td{
           
        }
        caption{
            
        }
    </style>
</head>
<body bgcolor="aquamarine">
<div class="navigation">
<div class="nav bg-secondary">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link  text-warning " href="viewloc.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-warning" href="About.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-warning" href="contact.php">Contact</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link text-warning" href="login.php">Login</a>
            </li>
            
          </ul>
        </div>
<?php 
       $results=mysqli_query($conn,$sql);
       while($row=mysqli_fetch_assoc($results)){
          
       
       

       ?>
       <table border="1px">
        
        <tr>
        <tr><h1>Your profile</h1></tr>
           <th> Name</th>
           <td><?php  echo   $row['name']; ?></td>
        </tr>
        <tr>
           <th>Email</th>
           <td><?php  echo   $row['email']; ?></td>
        </tr>
        <tr>
           <th>Address</th>
           <td><?php  echo   $row['address']; ?></td>
        </tr>
        <tr>
           <th>Phone</th>
           <td><?php  echo   $row['phone']; ?></td>
        </tr>
        <tr>
           <th>Zip Code</th>
           <td><?php  echo   $row['zip']; ?></td>
        </tr>
        <tr>
           <th>Your password</th>
           <td><?php  echo   $row['pass']; ?></td>
        </tr>
       

       </table>
       <?php 
       }
       ?>
    
</body>
</html>