<?php
include 'head1.php';
 ?>
</head>

<body>
	<div class="users">
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
							<input type="text" class="form-control" name="name" placeholder="Full Name" required="required">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
								<i class="fa fa-phone" aria-hidden="true"></i>
								</span>                    
							</div>
							<input type="text" class="form-control" name="phone" placeholder="Phone Number" maxlength="10" minlength="10" required="required">
						</div>
					</div>

					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</span>                    
							</div>
							<input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fa fa-lock"></i>
								</span>                    
							</div>
							<input type="text" class="form-control" name="password" placeholder="Password" required="required">
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
							<input type="text" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
						</div>
					</div>
					<div class="form-group">
						<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
					</div>
					<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">Sign Up</button>
					</div>
					<div class="text-left">Already have an account? <a href="#">LogIn</a></div>
			</form>
		<!-- <div class="text-center">Already have an account? <a href="#">Login here</a></div> -->
		</div>
	</div>
	<?php
include 'footer.php';
 ?>
</body>
</html>