<?php 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    session_start();
    include 'database.php';
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
            
        </head>
        <body>
            <div class="container-fluid">
                <p>Welcome to DevsDev</p>
                <div class="navbar"><img src="Images/DevsDev_Logo.png" style="width: 185px;" alt="logo">
                    <ul class="menu">       
                        <li ><a href="shop.php">Shop</a></li>
                        <li ><a href="projects.php">Projects</a></li>
                        <li ><a href="contact.php">Contact</a></li>
                        <li ><a id="userLogin" href="login.php">Login</a></li>
                        <li ><a id="userReg" href="register.php">Register</a></li>
                        <li ><a href="index.php">Menu</a></li>
                    </ul>
                </div>
            </div>
            <script src="/JS/apiSetup.js"></script>
        </body>
    </html>