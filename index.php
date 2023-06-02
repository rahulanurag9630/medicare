

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medical help</title>
  <!-- css of registration  -->
  <link rel="stylesheet" href="footer.css" class="css">
  <!-- css file linked up -->
  <link rel="stylesheet" href="index.css">
  <!-- css file -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- js cdn  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <style>

  </style>
  <link rel="stylesheet" href="form.css" class="css">

</head>

<body>
<?php
    if (isset($_GET['message']) && $_GET['message'] == 'success1') {
        
    }
?>
<div class="container">
    <!-- navigation bar  -->
    <div class="nav bg-secondary">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active text-warning " href="index.php">Home</a>
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
  <div class="row">
    <div class="column">
      <h2 style="font-weight: 900;" id="motive_txt">
        <marquee>our motive !</marquee>
      </h2>
      <p id="motive_par">Our mission is to provide exceptional and personalized healthcare to our patients, and our website is a key part of this mission. We believe that every patient deserves access to quality medical services, and that they should be fully informed and engaged in their own healthcare. Through our website, we aim to build trust and enhance our patients' experience by offering them an easy and convenient way to connect with us, access information and resources, and receive the care they need to achieve their best possible health</p>
      <!-- button need Help -->
       <a href="Accident.html" class="gradient-hover-effect" id="btnneedHelp">Need help</a>
      <div style="display: flex;  ">
        <div id="Home_h_people">
          <img class="happy_people" src="dp.jpg" alt="">
          <img class="happy_people" src="mahi1.jpg" alt="">
          <img class="happy_people" src="chomu1.jpg" alt="">
          <img class="happy_people" src="pranjal1.jpg" alt="">
          <img class="happy_people" src="shiksha1.jpg" alt="">
          <img class="happy_people" src="DSC_0073.JPG"  alt="">
        </div>

        <div style="position:relative;  top:1.6em; left: 1.5em;">
          <span style="font-weight: 700;"> 1000 +</span><br>
          <span style="font-weight: 700;"> People saved</span>
        </div>

      </div>
    </div>
    <div id="bg-img" style="display:inline-block"> <img src="pic.png" alt=""></div>
  </div>
  <!-- footer section  -->
  <footer>
    <div class="content">
      <div class="top">
        <div class="logo-details">
          <i class="fab fa-slack"></i>
          <span class="logo_name">Quick help</span>
        </div>
        <div class="media-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
      <div class="link-boxes">
        <ul class="box">
          <li class="link_name">Medical Help</li>
          <li><a href="Accident.html">Accidant</a></li>
          <li><a href="Accident.html">Pregnancy</a></li>
         
        </ul>
        <ul class="box">
          <li class="link_name">Services</li>
          <li><a href="Accident.html">Best Doctors</a></li>
          <li><a href="Accident.html">Care </a></li>
         
        </ul>
        <ul class="box">
          <li class="link_name">Account</li>
          <li><a href="About.html">About</a></li>
          <li><a href="contact.php">contact us</a></li>
          <li><a href="contact.php">Email</a></li>
          
        </ul>
        <ul class="box">
          <li class="link_name">Moto</li>
          <li><a href="About.html">Help people</a></li>
          <li><a href="About.html">saved people</a></li>
          
        </ul>
        <ul class="box input-box">
          <li class="link_name">Subscribe</li>
          <li><input type="text" placeholder="Enter your email"></li>
          <li><input type="button" value="Subscribe"></li>
        </ul>
      </div>
    </div>
    <div class="bottom-details">
      <div class="bottom_text">
      
        <span class="policy_terms">
          <a href="#">Privacy policy</a>
          <a href="#">Terms & condition</a>
        </span>
      </div>
    </div>
  </footer>
</div>
<?php
    if (isset($_GET['message']) && $_GET['message'] == 'success') {
        echo "<script>alert('Registered successfully');</script>";
    }
   
?>
<?php
    if (isset($_GET['msg']) && $_GET['msg'] == 'success1') {
        echo "<script>alert('msg send succesfully');</script>";
    }
  
?>
<?php
    if (isset($_GET['message']) && $_GET['message'] == 'success2') {
        echo "<script>alert('Request is sent succesfully');</script>";
    }
  
?>
</body>

</html>