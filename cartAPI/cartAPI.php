<?php 
//  
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;
// 1.) Var_dump succesfully executed at this point 
// var_dump($app);

$app->post('/cart', function (Request $request, Response $response, array $args) {
    // post method that goes to a route
    // make sure function has request parameters like cart and user data
    // match variables to database 
    // write query into database
    // insert query into database
    // nName, pID, pPrice, Qty,
    
 
    $servername='localhost:8889';
    $username='root';
    $password='root';
    $dbname ='store';

    $conn=mysqli_connect($servername,$username,$password,"$dbname");

    $query = "insert * INTO cart";// SQL query
    $result = $conn->query($query);

    while ($row = $result->fetch_object()){
        $data[] = $row;
    }
    
    
    });
    
    
    
    
    return json_encode($data);


// $app->run();


?>