<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include 'database.php';
if(isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])){
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];            
            header('Location: index.php');
        }else{
            echo '<div class="alert alert-danger">
            <strong>Error!</strong> Wrong password.
            </div>';
        }
    }else{
        echo '<div class="alert alert-danger">
        <strong>Error!</strong> Wrong email.
        </div>';
    }
}
?>




    

