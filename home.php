<?php
require_once 'php/session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        <?= ucfirst(basename($_SERVER['PHP_SELF'], '.php')); ?> | ECOMM
    </title>
    <!-- Bootstrap 4 CSS CDN -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
    <!-- Fontawesome CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <style>
        @import url("https://fonts.googleapis.com/css?family=Maven+Pro:400,500,600,700,800,900&display=swap");

        * {
            font-family: 'Maven Pro', sans-serif;
        }
    </style>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="login.php"><i class="fas fa-code fa-lg"></i>&nbsp; ECOMM</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-home"></i>&nbsp;Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-user-circle"></i>&nbsp;Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-cart-shopping"></i>&nbsp;Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-heart"></i>&nbsp;Wishlist</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        <i class="fas fa-user-cog"></i>&nbsp;Hi!
                        <?= $cname ?>
                    </a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item"><i class="fas fa-cog"></i>&nbsp;Setting</a>
                        <a href="php/logout.php" class="dropdown-item"><i
                                class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="main_contain">

        <!-- header slider -->
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://static.vecteezy.com/system/resources/previews/002/006/605/original/paper-art-shopping-online-on-smartphone-and-new-buy-sale-promotion-pink-backgroud-for-banner-market-ecommerce-free-vector.jpg"
                        alt="Los Angeles">
                </div>
                <div class="carousel-item">
                    <img src="https://static.vecteezy.com/system/resources/previews/004/299/835/original/online-shopping-on-phone-buy-sell-business-digital-web-banner-application-money-advertising-payment-ecommerce-illustration-search-free-vector.jpg"
                        alt="Chicago">
                </div>
                <div class="carousel-item">
                    <img src="https://img.freepik.com/free-vector/template-banner-online-store-with-shopping-cart-with-purchases-boxes-delivery-from-supermarket-vector-illustration_548887-104.jpg?w=2000"
                        alt="New York">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <!--header slider end-->

        <!--products -->
        <div class="product_box">

            <div class="containe">
                <div class="row">
                    <div class="col-md-3 col-sm-6 md">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="Images/2088_6_700x.webp">
                                    <!-- <img class="pic-2" src="images/3504-PURPLE_3_700x.webp"> -->
                                </a>
                            </div>
                            <div class="product-content">
                                <ul class="rating">
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                </ul>
                                <h3 class="title"><a href="#">Women's Shirt</a></h3>
                                <div class="price">&#8377;500</div>
                                <div class="product-button-group">
                                    <a class="product-like-icon" href="#"><i class="fas fa-heart"></i></a>
                                    <a class="buynow" href="single-product.php"><i
                                            class="fa fa-shopping-bag"></i>BUY</a>
                                    <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>ADD TO CART</a>
                                    <a class="product-compare-icon" href="#"><i class="fas fa-random"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 md">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="Images/3504-PURPLE_5_700x.webp">
                                    <!-- <img class="pic-2" src="images/3504-PURPLE_3_700x.webp"> -->
                                </a>
                            </div>
                            <div class="product-content">
                                <ul class="rating">
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                </ul>
                                <h3 class="title"><a href="#">Women's Shirt</a></h3>
                                <div class="price">&#8377; 600</div>
                                <div class="product-button-group">
                                    <a class="product-like-icon" href="#"><i class="fas fa-heart"></i></a>
                                    <a class="buynow" href="single-product.php"><i
                                            class="fa fa-shopping-bag"></i>BUY</a>
                                    <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>ADD TO CART</a>
                                    <a class="product-compare-icon" href="#"><i class="fas fa-random"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 md">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="Images/Blue Silk Embroidered Lehenga Set.jpg">
                                    <!-- <img class="pic-2" src="images/3504-PURPLE_3_700x.webp"> -->
                                </a>
                            </div>
                            <div class="product-content">
                                <ul class="rating">
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                </ul>
                                <h3 class="title"><a href="#">Women's Shirt</a></h3>
                                <div class="price">&#8377;600</div>
                                <div class="product-button-group">
                                    <a class="product-like-icon" href="#"><i class="fas fa-heart"></i></a>
                                    <a class="buynow" href="single-product.php"><i
                                            class="fa fa-shopping-bag"></i>BUY</a>
                                    <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>ADD TO CART</a>
                                    <a class="product-compare-icon" href="#"><i class="fas fa-random"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 md">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="Images/Embroidered Cape Back Gown.jpg">
                                    <!-- <img class="pic-2" src="images/3504-PURPLE_3_700x.webp"> -->
                                </a>
                            </div>
                            <div class="product-content">
                                <ul class="rating">
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                </ul>
                                <h3 class="title"><a href="#">Women's Shirt</a></h3>
                                <div class="price">&#8377; 650</div>
                                <div class="product-button-group">
                                    <a class="product-like-icon" href="#"><i class="fas fa-heart"></i></a>
                                    <a class="buynow" href="single-product.php"><i
                                            class="fa fa-shopping-bag"></i>BUY</a>
                                    <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>ADD TO CART</a>
                                    <a class="product-compare-icon" href="#"><i class="fas fa-random"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 md">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="Images/Georgette  Long Jacket And Flared Pant Set.jpg">
                                    <!-- <img class="pic-2" src="images/3504-PURPLE_3_700x.webp"> -->
                                </a>
                            </div>
                            <div class="product-content">
                                <ul class="rating">
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                </ul>
                                <h3 class="title"><a href="#">Women's Shirt</a></h3>
                                <div class="price">&#8377; 650</div>
                                <div class="product-button-group">
                                    <a class="product-like-icon" href="#"><i class="fas fa-heart"></i></a>
                                    <a class="buynow" href="single-product.php"><i
                                            class="fa fa-shopping-bag"></i>BUY</a>
                                    <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>ADD TO CART</a>
                                    <a class="product-compare-icon" href="#"><i class="fas fa-random"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 md">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="Images/Girls Lehenga Choli.jpg">
                                    <!-- <img class="pic-2" src="images/3504-PURPLE_3_700x.webp"> -->
                                </a>
                            </div>
                            <div class="product-content">
                                <ul class="rating">
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                </ul>
                                <h3 class="title"><a href="#">Women's Shirt</a></h3>
                                <div class="price">&#8377; 562</div>
                                <div class="product-button-group">
                                    <a class="product-like-icon" href="#"><i class="fas fa-heart"></i></a>
                                    <a class="buynow" href="single-product.php"><i
                                            class="fa fa-shopping-bag"></i>BUY</a>
                                    <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>ADD TO CART</a>
                                    <a class="product-compare-icon" href="#"><i class="fas fa-random"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 md">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="Images/Girls Plazo Dress.jpg">
                                    <!-- <img class="pic-2" src="images/3504-PURPLE_3_700x.webp"> -->
                                </a>
                            </div>
                            <div class="product-content">
                                <ul class="rating">
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                </ul>
                                <h3 class="title"><a href="#">Women's Shirt</a></h3>
                                <div class="price">&#8377; 720</div>
                                <div class="product-button-group">
                                    <a class="product-like-icon" href="#"><i class="fas fa-heart"></i></a>
                                    <a class="buynow" href="single-product.php"><i
                                            class="fa fa-shopping-bag"></i>BUY</a>
                                    <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>ADD TO CART</a>
                                    <a class="product-compare-icon" href="#"><i class="fas fa-random"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 md">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="Images/Girls Plazo Suit .jpg">
                                    <!-- <img class="pic-2" src="images/3504-PURPLE_3_700x.webp"> -->
                                </a>
                            </div>
                            <div class="product-content">
                                <ul class="rating">
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                </ul>
                                <h3 class="title"><a href="#">Women's Shirt</a></h3>
                                <div class="price">&#8377; 820</div>
                                <div class="product-button-group">
                                    <a class="product-like-icon" href="#"><i class="fas fa-heart"></i></a>
                                    <a class="buynow" href="single-product.php"><i
                                            class="fa fa-shopping-bag"></i>BUY</a>
                                    <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>ADD TO CART</a>
                                    <a class="product-compare-icon" href="#"><i class="fas fa-random"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 md">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="Images/Mustard Party Wear.jpg">
                                    <!-- <img class="pic-2" src="images/3504-PURPLE_3_700x.webp"> -->
                                </a>
                            </div>
                            <div class="product-content">
                                <ul class="rating">
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                </ul>
                                <h3 class="title"><a href="#">Women's Shirt</a></h3>
                                <div class="price">&#8377; 660</div>
                                <div class="product-button-group">
                                    <a class="product-like-icon" href="#"><i class="fas fa-heart"></i></a>
                                    <a class="buynow" href="single-product.php"><i
                                            class="fa fa-shopping-bag"></i>BUY</a>
                                    <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>ADD TO CART</a>
                                    <a class="product-compare-icon" href="#"><i class="fas fa-random"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 md">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="Images/Organza Floral Embroidered Gown.jpg">
                                    <!-- <img class="pic-2" src="images/3504-PURPLE_3_700x.webp"> -->
                                </a>
                            </div>
                            <div class="product-content">
                                <ul class="rating">
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                </ul>
                                <h3 class="title"><a href="#">Women's Shirt</a></h3>
                                <div class="price">&#8377; 860</div>
                                <div class="product-button-group">
                                    <a class="product-like-icon" href="#"><i class="fas fa-heart"></i></a>
                                    <a class="buynow" href="single-product.php"><i
                                            class="fa fa-shopping-bag"></i>BUY</a>
                                    <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>ADD TO CART</a>
                                    <a class="product-compare-icon" href="#"><i class="fas fa-random"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 md">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="Images/Party Wear.jpg">
                                    <!-- <img class="pic-2" src="images/3504-PURPLE_3_700x.webp"> -->
                                </a>
                            </div>
                            <div class="product-content">
                                <ul class="rating">
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                </ul>
                                <h3 class="title"><a href="#">Women's Shirt</a></h3>
                                <div class="price">&#8377; 800</div>
                                <div class="product-button-group">
                                    <a class="product-like-icon" href="#"><i class="fas fa-heart"></i></a>
                                    <a class="buynow" href="single-product.php"><i
                                            class="fa fa-shopping-bag"></i>BUY</a>
                                    <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>ADD TO CART</a>
                                    <a class="product-compare-icon" href="#"><i class="fas fa-random"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 md">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="Images/Peach Cotton Angrakha Kurta Set.jpg">
                                    <!-- <img class="pic-2" src="images/3504-PURPLE_3_700x.webp"> -->
                                </a>
                            </div>
                            <div class="product-content">
                                <ul class="rating">
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                </ul>
                                <h3 class="title"><a href="#">Women's Shirt</a></h3>
                                <div class="price">&#8377;780</div>
                                <div class="product-button-group">
                                    <a class="product-like-icon" href="#"><i class="fas fa-heart"></i></a>
                                    <a class="buynow" href="single-product.php"><i
                                            class="fa fa-shopping-bag"></i>BUY</a>
                                    <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>ADD TO CART</a>
                                    <a class="product-compare-icon" href="#"><i class="fas fa-random"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- products Slider  -->


    <!-- Footer section -->

    <?php
    include 'footer.php';
    ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>