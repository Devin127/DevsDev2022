<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include_once 'registerProcess.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta viewport="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>Register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
            crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="CSS/styleLogin.css">    
    </head>
    <body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-10">
                        <div class="card rounded-3 text-black">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="card-body p-md-5 mx-md-4">
                                        <div class="text-center">
                                            <img src="Images/DevsDev_Logo.png" style="width: 185px;" alt="logo">
                                            <h4 class="mt-1 mb-5 pb-1">Welcome to DevsDev</h4>
                                        </div>
                                        <form action="index.php" method="POST">
                                            <div class="form-outline mb-4">
                                                <input id="name" type="text" name="name" placeholder="Your First name" required>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <input id="email" type="email" name="email" placeholder="Your Email Address" required>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <input id="password" type="password" name="password" placeholder="Your Password" required>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <input id="password2" type="password" name="password2" placeholder="Confirm Password" required>
                                            </div>
                                            <div class="text-center pt-1 mb-5 pb-1">
                                                <input class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="submit" id="submit" value="Register"></input>
                                                <a class="text-muted" href="#!">Terms and Conditions</a>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center pb-4">
                                                <a href="login.php" class="btn btn-outline-danger">Already have an account? Login here</a>
                                                <a href="index.php" type="button" class="btn btn-outline-danger">Home</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                        <h4 class="mb-4">Software development for you!</h4>
                                        <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" 
            crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" 
            crossorigin="anonymous"></script>
    </body>
</html>




