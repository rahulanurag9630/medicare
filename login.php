<?php
    if (isset($_GET['msg']) && $_GET['msg'] == 'wrong') {
        echo "<script>alert('wrong email or password');</script>";
    }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    
    
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'popplns' ,sans-serif;
    
}
body
{
    background-color: #55c389;
}
.log{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #55c389;
}
.login{
    position: relative;
    padding: 50px;
    background-color:rgb(255, 255, 255);
    width: 400px;
    display: flex;
    flex-direction: column;
    gap: 20px;
    box-shadow: 0 25px 50px rgba(0,0,0,1);

}
.login h2{
    font-weight: 500;
    border-left: 15px solid #d55561;
    line-height: 1em;
    padding-left: 10px;
    transition: 0.5s;
    color: hwb(30 4% 92%);
}
.login .inputbox 
{
    position: relative;

}
.login .inputbox input{
    position: relative;
    width: 250px;
    padding: 10px 15px;
    outline: none;
    border: 2px solid hwb(30 4% 92%);
    font-size: 1em;
    color: rgb(42, 33, 19);
}
.login .inputbox #btn{
    border: none;
    background-color: #6cf3a2;
    color: rgb(41, 46, 45);

    transition: 0.5s;
    font-size: 1.1em;
    font-weight: 500;
    cursor: pointer;

}
.login .group {
    display: flex;
    justify-content: space-between;
}
.login .group a{
    color: rgb(7, 14, 10);
    text-decoration: none;
}
.login .group a:nth-child(2){
    font-weight: 500;
    text-decoration: underline;
    text-decoration: none;
}
.colors{
    position: absolute;
    right: 0;
    padding: 10px;
    background:#283b34;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.colors span{
    position: relative;
    width: 20px;
    height: 20px;
    background: var(--clr);
    margin: 10px;
    border-radius: 50%;
    cursor: pointer;
}
.active span.active{
    border: 2px solid #2d2323 ;
    scale:1.5;
    transition:0.5s;


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
        <a class="nav-link text-warning" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-warning" href="#">Contact</a>
      </li>
      <li class="nav-item" >
        <a class="nav-link text-warning " href="Doctor_reg.html">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active text-warning" href="login.php">Login</a>
      </li>
      
      
    </ul>
  </div>
 <form action="d_logincon.php" method="post">
 <div class="log">
   <div class="login">
    <h2 id="txt">Login</h2>
    <div class="inputbox">
        <input type="text" name="email" placeholder="email">
    </div>
    <div class="inputbox">
        <input type="password" name="pass" placeholder="Password">
    </div>
    <div class="inputbox"> 
        <input type="submit" value="Login" id="btn">
    </div>
    <div class="group"> 
        <a href="#" >Forget Password</a>
        <a href="Doctor_reg.html" >Signup</a>
    </div>
   </div>
 </form>
</div>


</body>
</html>