<?php 
  session_start();
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta viewport="width=device-width, initial-scale=1.0">
            <meta charset="utf-8">
            <title>Contact</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
            crossorigin="anonymous">
            <link href="CSS/generalStyle.css" rel="stylesheet" type="text/css">
            <link href="CSS/styleCart.css" rel="stylesheet" type="text/css">
            <link href="CSS/navbar.css" rel="stylesheet" type="text/css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
            
        </head>
        <body>
        <nav class="navbar sticky-top">
            <div class="navigationWrapper">
                    <img src="Images/DevsDev_Logo.png" width="100px" alt="logo">
                    <ul class="navigation">
                        <li class="navlist"><a class="link" href="index.php">Home</a></li>
                        <li class="navlist"><a class="link" href="about.php">About</a></li>
                        <li class="navlist"><a class="link" href="shop.php">Shop</a></li>
                        <li class="navlist"><a class="link" href="register.php">Register</a></li>
                        <li class="navlist"><a class="link" href="login.php">Login</a></li>
                    </ul>
            </div>
                </nav>
            
            <!-- contact me page -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center" >Contact Me</h1>
                        <p class="text-center">Hint: click the smoke</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center">
                            <a href="mailto:devindvt@gmail.com">
                                <img class="smoke" src="Images/contact.jpg" alt="email" width="400px" height="400px">
                            </a>
                        </p>
                    </div>
                </div>
                <!-- add google map -->
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3314.864854187854!2d18.478722315743923!3d-33.815800523742496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcc5f740974318b%3A0x85530f4248502b1a!2sDipidax%20Rd%2C%20Table%20View%2C%20Cape%20Town%2C%207441!5e0!3m2!1sen!2sza!4v1647856180261!5m2!1sen!2sza" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            
                        </p>
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