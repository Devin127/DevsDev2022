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
            <link href="CSS/styleHomePage.css" rel="stylesheet" type="text/css">
            <link href="CSS/styleCart.css" rel="stylesheet" type="text/css">
            <link href="CSS/navbar.css" rel="stylesheet" type="text/css">
            
        </head>
        <body>
            <div class="container">
                <nav class="navigationWrapper">
                    <img src="Images/DevsDev_Logo.png" width="100px" alt="logo">
                    <ul class="navigation">
                        <li class="navlist"><a class="link" href="index.php">Home</a></li>
                        <li class="navlist"><a class="link" href="about.php">About</a></li>
                        <li class="navlist"><a class="link" href="store.php">Store</a></li>
                        <li class="navlist"><a class="link" href="register.php">Register</a></li>
                        <li class="navlist"><a class="link" href="login.php">Login</a></li>
                    </ul>
                </nav>
            </div>
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
            </div>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" 
            crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" 
            crossorigin="anonymous"></script>    
        </body>
    </html>