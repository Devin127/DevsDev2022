                // take cart from user in shop.php make into a json array and send to cart.php
                var cart = new Vue({
                    el: '#cart',
                    data: {
                        cart: []
                    },
                    methods: {
                        getCart: function () {
                            axios.get('http://localhost:8888/DevsDev2022/cartAPI/cart')
                            .then(function (response) {
                                console.log(response);
                                this.cart = response.data;
                            })
                            .catch(function (error) {
                                console.log(error);
                            });
                        }
                    }
                });
                cart.getCart();
