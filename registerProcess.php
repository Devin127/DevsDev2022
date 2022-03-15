<?php 

include ('database.php');
if(isset($_POST['submit'])){
    $firstName = $_POST['firstName'];
    htmlentities($firstName);
    $surName = $_POST['surName'];
    htmlentities($surName);
    $email = $_POST['email'];
    filter_var($email, FILTER_VALIDATE_EMAIL);
    htmlentities($email);
    $userType = $_POST['userType'];
    htmlentities($userType);
    $password = $_POST['password'];
    htmlentities($password);
    md5($password);
    $stmt->bind_param("sssss", $firstName, $surName, $email, $userType, $password);
    // $sql = "Select * from users where firstName = '$firstName'";
    $sql = "INSERT INTO users 
    (firstName, surName, email, userType, password) VALUES ('$firstName', '$surName', '$email', '$userType', '$password')";
    if(mysqli_query($conn, $sql)){
        header ("Location: index.php");
        echo "connected";
    } else {
        echo "Something Is Broken";
    }
    mysqli_close($conn);
}
if(isset($_POST['submit'])){
    $_SESSION['firstName'] = $_POST['firstName'];
    $_SESSION['surName'] = $_POST['surName'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['userType'] = $_POST['userType'];
    $_SESSION['password'] = $_POST['password'];
}
$stmt->execute();

if(isset($_POST['submit'])){
    $firstName = $_SESSION['firstName'];
    $surName = $_SESSION['surName'];
    $email = $_SESSION['email'];
    $userType = $_SESSION['userType'];
}

?>
