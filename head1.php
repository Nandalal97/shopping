

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
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="css/style.css" />
    <title>Document</title>

    <style>
      /* for contact from */
textarea {
	resize: none;
}
/* contact from end */
    </style>
  </head>
  
<body>
    <!--navbar start -->
    
 

  <header>
    <div class="body_contain">
  <div class="container">
  <div class="body_contain">
      <div class="main_contain">

      

    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="#"><img src="images/ab.png" alt="logo_image"></a>
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
            <a class="btn" data-toggle="modal" data-target="#exampleModal">contact</a>
             
          </li>
        </ul>

        <!--searh box area -->

        <div class="search-box">
          <input type="text" name="search" placeholder="search" />
          <i class="fa-solid fa-magnifying-glass search_icon"></i>
        </div>

        <!--user, wishlist, shopping cart area  -->
        <div class="dropdown">
        <i class="fa-solid fa-cart-shopping"></i>
       
          <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                <i class="fa-solid fa-user"></i>
                </button>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="login.php">Log In</a>
                <a class="dropdown-item" href="signup.php">Sign Up</a>
        </div>
    
  </div>

        
      </div>
    </nav>
  </div>
</div>
</div>

</div>
</header>


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade mt-5" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Contact Us</h2>
        
      
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="contact-form">
			<form action="" method="post">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<span class="fa fa-user"></span>
								</span>                    
							</div>
							<input type="text" class="form-control" name="name" placeholder="Full Name*" >
							
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
								<i class="fa fa-phone" aria-hidden="true"></i>
								</span>                    
							</div>
							<input type="text" class="form-control" name="phoneNumber" placeholder="Phone Number*" maxlength="10" minlength="10" >
							
						</div>
					</div>

					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</span>                    
							</div>
							<input type="email" class="form-control" name="email" placeholder="Email Address*" >
							
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<!-- <span class="input-group-text"> -->
									<!-- <i class="fa fa-lock"></i> -->
								</span>                    
							</div>
							<textarea rows="4" cols="50" name="message"  placeholder="Your Message"></textarea>
							
						</div>
					</div>
					
					<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">Submit</button>
					</div>
					
			</form>
		<!-- <div class="text-center">Already have an account? <a href="#">Login here</a></div> -->
		</div>
	</div>
	
      </div>

    </div>
  </div>
</div>
<!--navbar end  -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
