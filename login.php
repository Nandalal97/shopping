<?php
include 'header.php';
 ?>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  include("database.php");
 
  $email=$_POST['email'];
  $password=$_POST['password'];

    //$sql = "select * from  user where email='$email' and password='$password'";
    $sql = "select * from  user where email='$email'";
    $result = mysqli_query($conn, $sql);
    $num=mysqli_num_rows($result);

    if($num==1){
      while($row=mysqli_fetch_assoc($result)){
        if(password_verify($password, $row['password'])){
          echo "<script>alert('log in Successfull.'); window.location.href='product.php'; </script>";
        }
        else{
          echo "<script>alert('Invalide Credantials');</script>";

        }
      }

    
     // echo "<script>alert('log in Successfull.');window.location.href='wellcome.php'; </script>";
    }
  
  else {
    echo "<script>alert('Invalide Credantials');</script>";
  }
    
}
?>




<body class="users">

<div >
		<div class="signup-form">
			<form action="" method="post">
			<h2>Log In</h2>
			
			<hr>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</span>                    
							</div>
							<input type="email" class="form-control" name="email" id="email" placeholder="Email Address*" >
							
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fa fa-lock"></i>
								</span>                    
							</div>
							<input type="text" class="form-control" name="password" id="password" placeholder="Password*" >
							
						</div>
					</div>
				
          <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Log in</button>
             
          </div>
          <div class="bottom-action clearfix">
              <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
              <a href="#" class="float-right">Forgot Password?</a>
          </div> <br>
          <div class="text-center small">Don't have an account! <a href="signup.php">Sign Up</a></div>       
      </form>
      <!-- <p class="text-center small">Don't have an account! <a href="#">Sign up here</a>.</p> -->
    </div>
  </div>

  <?php
include 'footer.php';
 ?>
</body>
</html>
