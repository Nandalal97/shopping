<?php
include 'header.php';
 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
  font-family: Arial;
  font-size: 17px;

}

* {
  box-sizing: border-box;
}

.checkout_page {
  width:70%;
  margin:50px auto;
  display: -ms-flexbox; 
  display: flex;
  -ms-flex-wrap: wrap; 
  flex-wrap: wrap;
  
}
.checkout_page h2{
  text-align: center;
  padding:20px;
  text-decoration: underline;
}
.checkout_row{

  margin:0 auto;
  display: -ms-flexbox; 
  display: flex;
  -ms-flex-wrap: wrap; 
  flex-wrap: wrap;

}
.checkout_rows{
  margin:0 auto;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap; 
  flex-wrap: wrap;
}
.cart_product {
  -ms-flex: 25%; 
  flex: 25%;

}

.checkout_page .customer_info {
  -ms-flex: 50%; 
  flex: 50%;
  padding-top:0px;
}

.checkout_box {
  -ms-flex: 75%; 
  flex: 75%;
}

.cart_product,
.customer_info,
.checkout_box {
  padding: 0 16px;
}

.containers {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
  
}
.icon-container i{
  background:transparent;
  padding:0px;
  margin:0px;
}

.btn {
  background-color: #fbe540;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  color:#820554;
  border-radius: 10px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #820554;
  color:white;
}

.containers a {
  color: #820554;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}


@media only screen and (max-width:990px)and (min-width: 400px) {
  .checkout_page {

    width:82%;
    padding:0px;
    
  }
  .cart_product {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>


<div class="checkout_page">
  

  <div class="checkout_box">
    <div class="containers">
      <form action="/action_page.php">
      <h2>Checkout</h2>
      
        <div class="checkout_row">
          <div class="customer_info">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="checkout_rows">
              <div class="customer_info">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="customer_info">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="customer_info">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
            <i class="fa-brands fa-cc-visa"style="color:navy;"></i>
            <i class="fa-brands fa-cc-amex" style="color:blue;"></i>
            <i class="fa-brands fa-cc-stripe" style="color:red;"></i>
            <i class="fa-brands fa-cc-paypal" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="+91 0000000000">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="checkout_rows">
              <div class="customer_info">
                <label for="expyear">Exp Date</label>
                <input type="text" id="expyear" name="expyear" placeholder="11/2023">
              </div>
              <div class="customer_info">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        
      </form>
    </div>
  </div>
  <div class="cart_product">
    <div class="containers">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>

      <input type="submit" value="Continue" class="btn">
    </div>
  </div>
</div>


<?php
include 'footer.php';
 ?>
</body>
</html>
