<?php
session_start();
$host="localhost";
$db_user="root";
$db_password="";
$db_name="medicare";
$conn=mysqli_connect($host,$db_user,$db_password,$db_name)or die("connection error". mysqli_connect_error());
if($conn){


$sql="SELECT * FROM registration ";

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
		table {
            
			border-collapse: collapse;
			width: 100%;
			margin-bottom: 20px;
		}
		table th, table td {
            font-weight: 800;
			padding: 10px;
			text-align: left;
			vertical-align: top;
			border: 1px solid #ccc;
		}
		table th {
          
			background-color: #f2f2f2;
			font-weight: bold;
		}
		table tr:nth-child(even) {
			
		}
		table tr:hover {
			background-color: #f5f5f5;
		}
        h1
        {
            margin-top: 5%;
        }
        body {
	background: linear-gradient(125deg, #ee7752,#e1c072,#FE6847, #e73c7e, #23a6d5);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
	height: 100vh;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
	</style>
</head>
<body>
<div class="container">
<div class="nav bg-secondary">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link  text-warning " href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-warning" href="About.html">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-warning" href="contact.php">Contact</a>
      </li>
      <li class="nav-item" >
        <a class="nav-link text-warning " href="Doctor_reg.html">Register</a>
      </li>
      <li class="nav-item" >
        <a class="nav-link text-warning " href="login.php">Login</a>
      </li>
    </ul>
  </div>

    <center><h1 >Your request is sended to the doctors and below is dector's list</h1></center>
<table border="1px">

       
       <tr>
      
           <th> Name</th>
           <th>Phone </th>
           
        </tr>

      
        <?
$results=mysqli_query($conn,$sql);
       while($row=mysqli_fetch_assoc($results)){
       ?>
        
        <tr>
         <td><? echo   $row['name']; ?></td>
           <td><? echo   $row['phone']; ?></td>
        </tr>
        

        <?
        }
       ?>
       </table>
       
</div>
    
</body>
</html>