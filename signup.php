<?php
include 'header.php';
 ?>
<?php 
$emailErr="";
$nameErr="";
$numErr="";
$passErr="";
$cpassErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  include("database.php");
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phoneNumber'];
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];

	$existSql= "select * from user where email='$email'";
  $result = mysqli_query($conn,$existSql);
  $numExitRows=mysqli_num_rows($result);

	if (empty($name)) {
    $nameErr = "* Name is required";
     //echo "<script>alert('Email can not be empty.');</script>";
  }
  else if (empty($email)) {
    $emailErr = "* Email is required";
     //echo "<script>alert('Email can not be empty.');</script>";
  }
  else if (empty($phone)) {
    $numErr = "* Phone Number is required";
     //echo "<script>alert('Email can not be empty.');</script>";
  }
  else{

// for email Exists(username) checkes 
  if ($numExitRows>0){
    echo "<script>alert('Email Id alredy Exists.Try again.');</script>";

  }else{
    // for password match and next registration process
    if($password == $cpassword){

      $hash=password_hash($password, PASSWORD_DEFAULT);
      $sql = "insert into user (name, email, number, password, date_time) values ('$name', '$email', '$phone', '$hash',  current_timestamp())";
      $result = mysqli_query($conn,$sql);
  
      if($result){
        echo "<script>alert('Successfull Sign Up.'); window.location.href='login.php';</script>";
      
        //header('Location:login.php');
  
      }
    }
    else {
      // echo "<script>alert('Password is Not Match.Try again.');</script>";
			$cpassErr = "* Password is Not Match";
    }
  }
}  
}


?>



<body class="users">
	<div >
		<div class="signup-form">
			<form action="" method="post">
			<h2>Sign Up</h2>
			<p>Please fill in this form to create an account!</p>
			<hr>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<span class="fa fa-user"></span>
								</span>                    
							</div>
							<input type="text" class="form-control" name="name" placeholder="Full Name*" >
							<span class="error"> <?php echo $nameErr;?></span>
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
							<span class="error"> <?php echo $numErr;?></span>
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
							<span class="error"><?php echo $emailErr;?></span>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fa fa-lock"></i>
								</span>                    
							</div>
							<input type="text" class="form-control" name="password" placeholder="Password*" >
							<span class="error"><?php echo $passErr;?></span>
						</div>
					</div>
					
					
					
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fa fa-lock"></i>
									<i class="fa fa-check"></i>
								</span>                    
							</div>
							<input type="text" class="form-control" name="cpassword" placeholder="Confirm Password">
							
							<span class="error"><?php echo $cpassErr;?></span>
						</div>
					</div>
					<div class="form-group">
						<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
					</div>
					<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">Sign Up</button>
					</div>
					<div class="text-left">Already have an account? <a href="login.php">LogIn</a></div>
			</form>
		<!-- <div class="text-center">Already have an account? <a href="#">Login here</a></div> -->
		</div>
	</div>
	<?php
include 'footer.php';
 ?>
</body>
</html>