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
            <title>Home</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
            crossorigin="anonymous">
            <link href="CSS/welcome.css" rel="stylesheet" type="text/css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
            <!-- add vue.js -->
            <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        </head>
        <body>
        
            <div class="container-fluid" >
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center">Welcome to DevsDev</h1>
                        <p class="text-center">{{Because my name is Devin and i am a Developer}}</p>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="navbar"><img src="Images/DevsDev_Logo.png" style="width: 185px;" alt="logo">
                        <ul class="menu">       
                            <li ><a href="shop.php">Shop</a></li>
                            <li ><a href="about.php">About</a></li>
                            <li ><a href="contact.php">Contact</a></li>
                            <li ><a id="userLogin" href="login.php">Login</a></li>
                            <li ><a id="userReg" href="register.php">Register</a></li>
                            <li ><a href="index.php">Menu</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
                integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" 
                crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
                integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" 
                crossorigin="anonymous"></script>
        </body>
    </html>