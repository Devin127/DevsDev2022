<?php 
include 'database.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $type = 'user';
    $password = $_POST['password'];
    
    Echo "Hello World";

    htmlentities($type);
    htmlentities($email);
    htmlentities($name);
    htmlentities($password);
    md5($password);

    filter_var($email, FILTER_VALIDATE_EMAIL);
    $stmt->bind_param("sssss", $name, $email, $password);
    $sql = "Select * from users where name = '$name'";
    
    $sql = "INSERT INTO users 
    (name, email, password) VALUES ('$name', '$email','$password')";
//     if(mysqli_query($conn, $sql)){
//         header ("Location: index.php");
//         echo "connected";
//     } else {
//         echo "Something Is Broken";
//     }
    
//     mysqli_close($conn);
}

if(isset($_POST['submit'])){
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
}
$stmt->execute();

// if(isset($_POST['submit'])){
//     $name = $_SESSION['name'];
//     $email = $_SESSION['email'];
//     $password = $_SESSION['password'];
    
// }

?>
