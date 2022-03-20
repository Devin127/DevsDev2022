<?php 
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  session_start();
  include 'database.php';
  // include 'cartProcess.php';
  // include 'registerProcess.php';
  // include 'loginProcess.php';
  
  // var_dump($_SESSION);


?>
<!DOCTYPE html>
  <html>
      <head>
          <meta viewport="width=device-width, initial-scale=1.0">
          <meta charset="utf-8">
          <title>Home Page</title>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
          crossorigin="anonymous">
          <link href="CSS/styleHomePage.css" rel="stylesheet" type="text/css">
          <link href="CSS/styleCart.css" rel="stylesheet" type="text/css">
          <link href="CSS/navbar.css" rel="stylesheet" type="text/css">
          <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
      </head>
      <body>
        <!-- custom navbar -->
        <div class="container">
        <nav class="navigationWrapper">
            <img src="Images/DevsDev_Logo.png" width="100px" alt="logo">
          <ul class="navigation">
            <li class="parent"><a class="link" href="index.php">Home</a></li>
            <li class="parent"><a class="link" href="about.php">About</a></li>
            <li class="parent"><a class="link" href="contact.php">Contact</a></li>
            <li class="parent"><a class="link" href="register.php">Register</a></li>
            <li class="parent"><a class="link" href="login.php">Login</a></li>
          </ul>
        </nav>
        </div>







        
      </body>
  </html>