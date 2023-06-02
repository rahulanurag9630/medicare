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
$sql2 = "SELECT latitude,longitude FROM images WHERE id = (SELECT MAX(id) FROM images) ";
if (mysqli_affected_rows($conn) > 0) {
  // Show an alert message when a new data is inserted into the database table
  echo "<script>alert('New data has been inserted into the database table.');</script>";
}

}


       

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        nav {
  background-color: #333;
  display: flex;
  
}
.nav2{
  float: right;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
}

nav a {
  color: white;
  display: block;
  padding: 1em;
  text-decoration: none;
}

nav i {
  margin-right: 0.5em;
}

nav a:hover {
  background-color: #444;
}
.map{
  height: 200px;
  width: 500px;
  background-color: red;
}
.map2{
  height: 50vh;
  width: 85vw;
  
}

    </style>
    

</head>

<body>
   <div class="container">
   <nav>
  <ul>
    <li><a href="d_dashboard.html"><i class="fa fa-home"></i> Home</a></li>
    <li><a href="profile"><i class="fa fa-wrench"></i> Services</a></li>
    <li><a href="about"><i class="fa fa-info-circle"></i> About</a></li>
    <li><a href="#contact"><i class="fa fa-envelope"></i> Contact</a></li>
    
  </ul>
  <ul class="nav2">
    <li><a href="logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a></li>
  </ul>
</nav>
     
<div class="map">
      <?
        $results=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($results)){

       ?>
           <h1>Welcome </h1>
           <? echo "<h1>".$row['name'] ."</h1>"  ?>

                      <?}?>
                      <?
        $results1=mysqli_query($conn,$sql2);
        while($row1=mysqli_fetch_assoc($results1)){

       ?>     
       
       
</div>
<div class="map2">

</div>
Latitude: <input type="text" id="latitude" value="<? echo   $row1['latitude'];   ?>">
    Longitude: <input type="text" id="longitude" value="<? echo $row1['longitude']   ?>">
    <?}?>
    <button onclick="showPosition()">Show on Map</button>
    
   </div>
   <script>
      var map = L.map('map').setView([0, 0], 13);
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(map);
      var marker = L.marker([0, 0]).addTo(map);
     function showPosition() {
        var latitude = parseFloat(document.getElementById("latitude").value);
        var longitude = parseFloat(document.getElementById("longitude").value);
        if (isNaN(latitude) || isNaN(longitude)) {
            alert("Please enter valid latitude and longitude values");
            return;
        }
        map.setView([latitude, longitude], 13);
        marker.setLatLng([latitude, longitude]);
      }

    </script>
</body>
</html>