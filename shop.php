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
          <link href="CSS/styleHomePage.css" rel="stylesheet" type="text/css">
          <link href="CSS/styleCart.css" rel="stylesheet" type="text/css">
          <link href="CSS/navbar.css" rel="stylesheet" type="text/css">
          <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
      </head>
      <body>
        <div class="container">
        <nav class="navigationWrapper">
            <img src="Images/DevsDev_Logo.png" width="100px" alt="logo">
          <ul class="navigation">
            <li class="parent"><a class="link" href="index.php">Home</a></li>
            <li class="parent"><a class="link" href="about.php">About</a></li>
            <li class="parent"><a class="link" href="contact.php">Contact</a></li>
            <li class="parent"><a class="link" href="register.php">Register</a></li>
            <li class="parent"><a class="link" href="login.php">Login</a></li>
          </ul>
        </nav>
        </div>
        <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <h1 class="text-center">The Store</h1>
                <p class="text-center">Made with: HTML, CSS, PHP, mySQL, AXIOS, Vue.js, Bootstrap and Javascript</p>
              </div>
            </div>
        </div>
              <section>
                  <div class ="container" >
                  <div id="app" >
                      <div class="row">
                          <div class="col-md-12" >
                              <div class="row">
                                      <div class="col-md-3" v-for="product in products" :key="product.id" >
                                          <div class="card" >
                                              <div class="card-body">
                                                  <div class="product">
                                                      <img :src="product.productImage" alt="Product Img">
                                                      <h4 class="text-info">{{ product.productName }}</h4>                                            
                                                      <h4 class="text-muted">{{ product.price }} Coins</h4>
                                                      <p class="text-muted">{{ product.productDescription }}</p>
                                                      <input type="number" name="quantity" class="form-control" value="1">
                                                      <input type="hidden" name="productName" value="{{productID}}">
                                                      <input type="hidden" name="price" value="{{productID.price}}">
                                                      <input type="submit" name="add_to_cart" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"  value="Add to Cart">
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
              <div class="container">
                <!-- Add a carousel of projetcs -->
                <div class="row">
                  <div class="col-12">
                    <h1 class="text-center">Projects</h1>
                  </div>
                </div>
              </div>
                
            <script>
                var app = new Vue({
                    el: '#app',
                    data: {
                        products: '',
                    },
                    methods: {
                        getproducts: function () {
                            axios.get('http://localhost:8888/DevsDev2022/productAPI/products')
                            .then(function (response) {
                                app.products = response.data;
                            })
                            .catch(function (error) {
                                console.log(error);
                            });
                        }
                    },
                    mounted: function () {
                        this.getproducts();
                    }
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