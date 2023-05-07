<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/style.css" />
    <title>Document</title>
  </head>
  
<body>
    <!--navbar start -->
  <header>
  <div class="body_contain">
      <div class="main_contain">

      

    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="#">Ecomm</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navToggle" aria-controls="navToggle" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="fa-solid fa-bars togglemenu"></i></span>
      </button>

      <div class="collapse navbar-collapse" id="navToggle">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>

          <!-- dropdown area -->

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">All Products</a>
                  <a class="dropdown-item" href="#">Ladies</a>
                  <a class="dropdown-item" href="#">Mens</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">contact</a>
          </li>
        </ul>

        <!--searh box area -->

        <div class="search-box">
          <input type="text" name="search" placeholder="search" />
          <i class="fa-solid fa-magnifying-glass search_icon"></i>
        </div>

        <!--user, wishlist, shopping cart area  -->
        <div class="icons">
          <i class="fa-solid fa-user icon-user">
            <div class="user_area">
              <a href="#">Log In</a> <br />
              <a href="#">Sign Up</a><br />
              <!--
          <a href="#">Log Out</a> <br>
          <a href="#">Dashbourd</a>
          -->
            </div>
          </i>
          <i class="fa-solid fa-cart-shopping"></i>
          <i class="fa-solid fa-heart"></i>
        </div>
      </div>
    </nav>
  </div>
</div>
<!--navbar end  -->