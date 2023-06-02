<?php
session_start();


$email=$_SESSION["email"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicare";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="SELECT * FROM `registration` where email='".$email."'";
$sql2 = "SELECT * FROM images WHERE id = (SELECT MAX(id) FROM images) ";

$result = mysqli_query($conn, $sql2);
// Get the number of rows in the table
$result2 = mysqli_query($conn,$sql);
$zip;
if (mysqli_num_rows($result2) > 0) {
    // Output data of each row
    while($row = mysqli_fetch_assoc($result2)) {
        $zip=$row['zip'];
        
    
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="user.css">
    <style>
        body {
            background: linear-gradient(45deg, #f32170, #ff6b08,
                    #cf23cf);
            background-size: cover;
        }

        nav {
            background-color: #333;
            display: flex;

        }

        .nav2 {
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

        .map {
            height: 200px;
            width: 500px;
            background-color: red;
        }

        #map {
            height: 50vh;
            width: 85vw;

        }

        .alert {
            height: 55vh;
            width: 60vw;
            background-color: cyan;
        }

        .field_input {
            width: 50%;
        }

        input[type="text"],

        input[type="email"],
        input[type="number"] {
            width: 70%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>

    
    <nav>
            <ul>
                <li><a href="viewloc.php"><i class="fa fa-home"></i> Home</a></li>
                
                <li><a href="About.html"><i class="fa fa-info-circle"></i> About</a></li>
                <li><a href="contact.php"><i class="fa fa-envelope"></i> Contact</a></li>

            </ul>
            <ul class="nav2">
                <li><a href="logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </nav>
        <div id="map"></div>
        <?php
        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while($row1 = mysqli_fetch_assoc($result)) {
                 if($row['zip']==$row1['zip'])
                 {
         ?>
         <h3>Latitude:</h3> <input type="text" id="latitude" value="<?echo   $row1['latitude'];   ?>"><br><br>
        <h3> Longitude:</h3> <input type="text" id="longitude" value="<? echo $row1['longitude']   ?>"> <br><br>
        <?php }}} }}?>
</body>
</html>