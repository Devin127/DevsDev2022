<?php 
                use \Psr\Http\Message\ServerRequestInterface as Request;
                use \Psr\Http\Message\ResponseInterface as Response;

                require './vendor/autoload.php';

                $app = new \Slim\App;
                // 1.) Var_dump succesfully executed at this point 
                // var_dump($app);

                $app->get('/products', function (Request $request, Response $response, array $args) {
                    // require_once 'database.php';
                    $servername='localhost:8889';
                    $username='root';
                    $password='root';
                    $dbname ='store';

                    $conn=mysqli_connect($servername,$username,$password,"$dbname");

                    $query = "select * from products";// SQL query
                    $result = $conn->query($query);

                    while ($row = $result->fetch_object()){
                        $data[] = $row;
                    }
                    
                    return json_encode($data);
                });
                
                $app->run();




            ?>