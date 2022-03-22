<?php 
session_start();
if(isset($_POST['submit'])){
    extract($_POST);
    include ('database.php');
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $row = mysqli_fetch_array(mysqli_query($conn,$sql));
    $_SESSION['id'] = getid($row['id']);
    if(is_array($row)){
        $_SESSION['id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['name'] = $row['name'];
        
        header('location:index.php');
} else {
    echo "Login Failed";
}
}
?>




    

