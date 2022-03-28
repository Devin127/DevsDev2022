<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername='localhost:8889';
$username='root';
$password='root';
$dbname ='store';

$conn=mysqli_connect($servername,$username,$password,"$dbname");

session_start();
if(isset($_POST['submit'])){
    extract($_POST);
    
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $row = mysqli_fetch_array(mysqli_query($conn,$sql));
    if(is_array($row)){
        $_SESSION['ID'] = $row[''];
        $_SESSION['UserEmail'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['name'] = $row['name'];
        
        header('location:index.php');
} else {
    echo "Login Failed";
}
}



?>




    

