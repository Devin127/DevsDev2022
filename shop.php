<?php 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    session_start();
    include 'database.php';
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta viewport="width=device-width, initial-scale=1.0">
            <meta charset="utf-8">
            <title>Store</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
            crossorigin="anonymous">
            <link href="CSS/generalStyle.css" rel="stylesheet" type="text/css">
            <link href="CSS/navbar.css" rel="stylesheet" type="text/css">
            <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
            <script>'https://unpkg.com/vuex@4.0.0/dist/vuex.global.js'</script>
            <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        </head>
        <body>
        <nav class="navbar sticky-top">
            <div class="navigationWrapper">
                <img src="Images/DevsDev_Logo.png" width="100px" alt="logo">
                <ul class="navigation">
                    <li class="parent"><a class="link" href="index.php">Home</a></li>
                    <li class="parent"><a class="link" href="about.php">About</a></li>
                    <li class="parent"><a class="link" href="contact.php">Contact</a></li>
                    <li class="parent"><a class="link" href="register.php">Register</a></li>
                    <li class="parent"><a class="link" href="login.php">Login</a></li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                        <h1 class="text-center">The Shop<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"><img src="Images/cart.png" ></button></h1>
                        <p class="text-center">Made with: HTML, CSS, PHP, mySQL, AXIOS, Vue.js, OOP, Bootstrap and Javascript</p>
                </div>
            </div>        
            <section>
                <div class ="container" >
                    <div id="app" >
                        <div class="row">
                            <div class="col-md-12" >
                                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Your Cart</h5>
                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>
                                    <!-- cart -->
                                    <div class="offcanvas-body" id="cart">
                                        <h3 class="text-center" id="Tot" name="Tot"  >Total: {{ total }} Coins </h3>
                                        <button class="btn btn-danger" @click="clearCart()">Empty</button>
                                        <div class="col" v-for="(product, index) in cart">
                                            <div class="card h-100">
                                                <div class="card-body">
                                                    <h5 class ="text-center" id="nName" name="nName" >{{ product.productName }}</h5>
                                                    <p type="hidden" id="pID" name="pID" >ID {{ product.productID }}</p>
                                                    <p class="card-text" id="pPrice" name="pPrice" > Price: {{ product.price }} Coins</p>
                                                    <p class="card-text" id="Qty" name="Qty" ><button class="btn btn-danger" @click="removeFromCart(product)">-</button> {{ product.quantity }} <button class="btn btn-success" @click="addToCart(product)">+</button> </p>
                                                    <p class="card-text"> Sub: {{ product.price * product.quantity }} Coins</p>
                                                </div>
                                            </div>
                                        </div>
                                        <button class = "btn btn-success" @click="checkout()">Checkout</button>
                                    </div>
                                </div>
                                    <br>
                            <!-- Shop -->
                            <div class="row">
                                    <div class="col-md-3" v-for="product in products" :key="product.id" >
                                        <div class="card" >
                                            <div class="card-body">
                                                <div class="product">
                                                    <img :src="product.productImage" alt="Product Img">
                                                    <h4 class="text-info">{{ product.productName }}</h4>                                            
                                                    <h4 class="text-muted">{{ product.price }} Coins</h4>
                                                    <p class="text-muted">{{ product.productDescription }}</p>
                                                    <input type="hidden" name="quantity" class="form-control" value="1">
                                                    <input type="hidden" name="productName" value="{{productID}}">
                                                    <input type="hidden" name="price" value="{{productID.price}}">
                                                    <input type="submit" name="add_to_cart" @click="addToCart(product)" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"  value="Add to Cart">                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
        <script>
            var app = new Vue({
                el: '#app',
                computed: {
                    total: function() {
                        var total = 0;
                        for (var i = 0; i < this.cart.length; i++) {
                            total += this.cart[i].price * this.cart[i].quantity;
                        }
                        return total;
                    }
                },
                data() {
                    return {
                        products: [],
                        cart: [],
                        item: {
                            productName: '',
                            productID: '',
                            price: '',
                            quantity: '',
                            total: ''
                        }
                    }
                },
                methods: {
                    getproducts() {
                        axios.get('http://localhost:8888/DevsDev2022/productAPI/products')
                        .then(function (response) {
                            app.products = response.data;
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                    },
                    addToCart(product) {
                            var cartItem = this.cart.find(item => item.productName === product.productName);
                            if (cartItem) {
                                cartItem.quantity++;
                            } else {
                                this.cart.push({
                                    productName: product.productName,
                                    price: product.price,
                                    quantity: 1
                                });
                            }
                        },
                        removeFromCart(product) {
                            var cartItem = this.cart.find(item => item.productName === product.productName);
                            if (cartItem.quantity > 1) {
                                cartItem.quantity--;
                            } else {
                                this.cart.splice(this.cart.indexOf(cartItem), 1);
                            }
                        },
                        
                        clearCart() {
                            this.cart = [];
                        }
                    },
                mounted: function () {
                    this.getproducts();
                }
            });

        </script>
        
        <script>
             //create a Local storage of the cart
            //      convert js data to json object
            axios({
                method: 'post',
                url: 'cartAPI/cartAPI.php',
                data: {
                //add app.cart array
                    cart: 'app.cart'
                    }
                })
                .then(function (response) {
                console.log(response);
                })
                .catch(function (error) {
                console.log(error);
                });
        </script>
        
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" 
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" 
        crossorigin="anonymous"></script>
        </body>
    </html>