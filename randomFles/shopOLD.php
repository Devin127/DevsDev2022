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
         <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
     </head>
     <body>
    <!-- End of Navbar -->
            <!-- End of Navbar -->

            <!-- create a vue shopping cart using products from axios.get('http://localhost:8888/DevsDev2022/productAPI/products') Api  -->
            <div id="app">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Shopping Cart</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Product</th>
                                                            <th>Price</th>
                                                            <th>Quantity</th>
                                                            <th>Subtotal</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr v-for="(item, index) in cart">
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <img :src="item.image" alt="" class="img-fluid">
                                                                    </div>
                                                                    <div class="col-md-10">
                                                                        <h5>@{{ item.name }}</h5>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>$@{{ item.price }}</td>
                                                            <td>
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <button class="btn btn-outline-secondary" @click="decreaseQuantity(index)">-</button>
                                                                    </div>
                                                                    <input type="text" class="form-control" v-model="item.quantity">
                                                                    <div class="input-group-append">
                                                                        <button class="btn btn-outline-secondary" @click="increaseQuantity(index)">+</button>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>$@{{ item.subtotal }}</td>
                                                            <td>
                                                                <button class="btn btn-danger" @click="removeItem(index)">Remove</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Coupon Code</label>
                                                        <input type="text" class="form-control" v-model="coupon">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Email Address</label>
                                                        <input type="email" class="form-control" v-model="email">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Order Notes</label>
                                                        <textarea class="form-control" v-model="notes"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button class="btn btn-primary btn-block" @click="checkout">Checkout</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
             <!-- vue while loop of products from API in bootstrap cards -->
             <section>
                <div class ="container" >
                    <div class="row">
                        <div class="col-md-12" >
                            <div class="row">
                                
                                    <div class="col-md-3"  >
                                        <div class="card" >
                                            <div class="card-body">
                                                <div class="product" v-for="product in products" :key="product.id">
                                                    <img :src="product.productImage" alt="Product Img">
                                                    <h4 class="text-info">{{ product.productName }}</h4>                                            
                                                    <h4 class="text-muted">{{ product.price }} Coins</h4>
                                                    <p class="text-muted">{{ product.productDescription }}</p>
                                                    <input type="number" name="quantity" class="form-control" value="1">
                                                    <input type="hidden" name="productName" value="{{productID}}">
                                                    <input type="hidden" name="price" value="{{productID.price}}">
                                                    <input type="submit" name="add_to_cart" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" @click="addToCart(product)" value="Add to Cart">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
             </section>
            </div>

            <script>
                var app = new Vue({
                    el: '#app',
                    data: {
                        products: '',
                        cart: [],
                        coupon: '',
                        email: '',
                        notes: '',
                    },
                    methods: {
                        // add to cart
                        addToCart(product) {
                            // check if product already in cart
                            var index = this.cart.findIndex(item => item.id == product.id);
                            if (index == -1) {
                                // if not in cart, add to cart
                                this.cart.push({
                                    id: products.productID,
                                    name: product.name,
                                    price: product.price,
                                    quantity: 1,
                                    subtotal: product.price
                                });
                            } else {
                                // if in cart, increase quantity
                                this.cart[index].quantity++;
                                this.cart[index].subtotal = this.cart[index].price * this.cart[index].quantity;
                            }
                        },

                        getproducts: function () {
                            axios.get('http://localhost:8888/DevsDev2022/productAPI/products')
                            .then(function (response) {
                                app.products = response.data;
                            })
                            .catch(function (error) {
                                console.log(error);
                            });
                        },




                        increaseQuantity(index) {
                            this.cart[index].quantity++;
                            this.cart[index].subtotal = this.cart[index].quantity * this.cart[index].price;
                        },
                        decreaseQuantity(index) {
                            if (this.cart[index].quantity > 1) {
                                this.cart[index].quantity--;
                                this.cart[index].subtotal = this.cart[index].quantity * this.cart[index].price;
                            }
                        },
                        removeItem(index) {
                            this.cart.splice(index, 1);
                        },
                        checkout() {
                            axios.post('http://localhost:8888/DevsDev2022/cartAPI/checkout', {
                                cart: this.cart,
                                coupon: this.coupon,
                                email: this.email,
                                notes: this.notes,
                            })
                            .then(function (response) {
                                console.log(response);
                            })
                            .catch(function (error) {
                                console.log(error);
                            });
                        },
                    },
                    mounted: function () {
                        this.getproducts();
                    },
                    mounted() {
                        axios.get('http://localhost:8888/DevsDev2022/productAPI/products')
                        .then(function (response) {
                            app.cart = response.data;
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                    },
                });
            </script>
        </div>
    

           


           

            




























            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" 
            crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" 
            crossorigin="anonymous"></script>
     </body>
    </html>