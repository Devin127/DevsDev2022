<?php
   $servername='localhost:8889';
   $username='root';
   $password='root';
   $dbname ='store';

   $conn=mysqli_connect($servername,$username,$password,"$dbname");
   
      if(!$conn){
         die('Failed to Connect to database'.mysqli_connect_error());
      }
?>