<?php 
include ('database.php');
$_POST_['type'] = 'user';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    htmlentities($name);
    $email = $_POST['email'];
    filter_var($email, FILTER_VALIDATE_EMAIL);
    htmlentities($email);
    $type = $_POST['type'];
    htmlentities($type);
    $password = $_POST['password'];
    htmlentities($password);
    md5($password);
    $stmt->bind_param("sssss", $name, $email, $type, $password);
    $sql = "Select * from users where name = '$name'";
    $sql = "INSERT INTO users 
    (id, name, email, type, password) VALUES (' ', '$name', '$email', '$type', '$password')";
    if(mysqli_query($conn, $sql)){
        header ("Location: index.php");
        echo "connected";
    } else {
        echo "Something Is Broken";
    }
    mysqli_close($conn);
}

if(isset($_POST['submit'])){
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['type'] = $_POST['type'];
    $_SESSION['password'] = $_POST['password'];
}
$stmt->execute();

if(isset($_POST['submit'])){
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    
}

?>
