<?php 

if(isset($_POST['submit'])){
    extract($_POST);
    include('database.php');
    $sql = "Select * FROM users WHERE email = '$email' AND password = '$password'";
    $row = mysqli_fetch_array(mysqli_query($conn, $sql));
    if(is_array($row)){
        $_SESSION['name'] = $row['name'];
        
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        header("Location: index.php");
    } else {
        echo "Something Is Broken";
    }
}
?>