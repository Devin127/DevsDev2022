<?php
   $servername='localhost:8889';
   $username='root';
   $password='root';
   $dbname ='store';

   $conn=mysqli_connect($servername,$username,$password,"$dbname");
   $query ='SELECT * FROM products ORDER BY id ASC';
   $result = mysqli_query($conn,$query);

   
   $stmt = $conn->prepare("INSERT INTO users (name, email, type, password) VALUES (?, ?, ?, ?)");
      if(!$conn){
         die('Failed to Connect to database'.mysqli_connect_error());
      }
      // if(isset($_POST['submit'])){
      //    $firstName = $_POST['firstName'];
      //    $surName = $_POST['surName'];
      //    $email = $_POST['email'];
      //    $userType = $_POST['userType'];
      //    $password = $_POST['password'];
      //    $stmt->bind_param("sssss", $firstName, $surName, $email, $userType, $password);
      //    $stmt->execute();
      //    header ("Location: index.php");
      // }
?>