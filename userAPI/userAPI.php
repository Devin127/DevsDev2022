<?php 
    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;
    require '../vendor/autoload.php';
    $app = new \Slim\App;
    $app->post('/users', function (Request $request, Response $response, array $args) {
        $servername='localhost:8889';
        $username='root';
        $password='root';
        $dbname ='store';
        $conn=mysqli_connect($servername,$username,$password,"$dbname");
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            
        }
        $data = $request->getParsedBody();
        $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
        $result = mysqli_query($conn, $sql);
            if($result){
                echo '<script>alert("Registration Successful!")</script>';
                header("Location: login.html");
            }
            else{
                echo '<script>alert("Registration Failed!")</script>';
            }
    });
    $app->run();
?>