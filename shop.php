<?php 
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);
 session_start();
 include 'database.php';
 include 'cartProcess.php';
 // include 'registerProcess.php';
 // include 'loginProcess.php';
 
 // var_dump($_SESSION);


?>
<!DOCTYPE html>
 <html>
     <head>
         <meta viewport="width=device-width, initial-scale=1.0">
         <meta charset="utf-8">
         <title>Home Page</title>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
         rel="stylesheet" 
         integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
         crossorigin="anonymous">
         <link href="CSS/styleHomePage.css" rel="stylesheet" type="text/css">
         <link href="CSS/styleCart.css" rel="stylesheet" type="text/css">
     </head>
     <body>
         <div class="container-fluid">


<div class="myCart">
                    <?php
                        if(empty($_SESSION['shopping_cart'])){
                            echo '<button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"><p>Your Cart is Empty</p></button>';
                        }else{
                    ?>
                </div>
                <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Your Cart</button>
                <br>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        <div class="table-responsive">
                            <table class="table table-dark">
                                <tr>
                                    <th scope="col">Shop</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Total</th>
                                    <th scope="col"></th>
                                </tr>
                            <?php
                                if(!empty($_SESSION["shopping_cart"]))
                                {
                                    $total = 0;
                                    foreach($_SESSION["shopping_cart"] as $keys => $values)
                                {
                            ?>
                                <tr>
                                    <td><?php echo $values["productName"]; ?></td>
                                    <td><?php echo $values["quantity"]; ?></td>
                                    <td><?php echo $values["price"]; ?> Coins</td>
                                    <td><?php echo number_format($values["quantity"] * $values["price"], 2);?> Coins</td>
                                    <td><a href="index.php?action=delete&id=<?php echo $values["productID"]; ?>"><button class="btn btn-danger">Remove from cart</button></a></td>
                                </tr>
                                    <?php
                                        $total = $total + ($values["quantity"] * $values["price"]);
                                        }
                                    ?>
                                <tr>
                                    <td colspan="3" align="right">Total</td>
                                    <td align="right"><?php echo number_format($total, 2); ?> Coins</td>
                                    <!-- add a checkout Button -->
                                    <td><a href="checkout.php"><button class="btn btn-success">Checkout</button></a></td>
                                    <!-- add checkout Backend -->
                                    <!-- Add a empty cart function -->
                                </tr>
                                    <?php
                                        }
                                    ?>
                            </table>
                        </div>
                    </div>
                </div>
                <?php
                        }
                    ?>
                <br>
         </div>
         Make Products display with APi and not like this  -->
            <div class="container-fluid">
            <!-- <img src="/Images/cover1.jpeg" class="img-fluid" alt="Responsive image"> -->
            <section>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <?php
                                $query = 'SELECT * FROM products ORDER BY productID ASC';
                                $result = mysqli_query($conn,$query);
                                if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo '
                                        <div class="col-md-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <form method="post" action="index.php?action=add&id='.$row['productID'].'">
                                                        <div class="product">
                                                            <img src="'.$row['productImage'].'" alt="">
                                                            <h4 class="text-info">'.$row['productName'].'</h4>                                            
                                                            <h4 class="text-muted">'.$row['price'].' Coins</h4>
                                                            <p class="text-muted">'.$row['productDescription'].'</p>
                                                            <input type="number" name="quantity" class="form-control" value="1">
                                                            <input type="hidden" name="productName" value="'.$row['productID'].'">
                                                            <input type="hidden" name="price" value="'.$row['price'].'">
                                                            <input type="submit" name="add_to_cart" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" value="Add to Cart">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        ';
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <h1> About </h>
            <p>
                lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod, nisi vel blandit porttitor, nisl nunc egestas nisi, euismod aliquam nisl nunc eget nunc.
                
            </p>
            </div>
                </div>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" 
            crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" 
            crossorigin="anonymous"></script>
     </body>
    </html>