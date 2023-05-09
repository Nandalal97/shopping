<?php
include 'head1.php';
 ?>
<body class="users">
  <div >
  <div class="login-form">
      <form action="" method="post">
          <h2 class="text-center">Log In</h2>   
          <div class="form-group">
            <div class="input-group">
                  <div class="input-group-prepend">
                      <span class="input-group-text">
                          <span class="fa fa-user"></span>
                      </span>                    
                  </div>
                  <input type="text" class="form-control" placeholder="Username" required="required">
              </div>
          </div>
      <div class="form-group">
              <div class="input-group">
                  <div class="input-group-prepend">
                      <span class="input-group-text">
                          <i class="fa fa-lock"></i>
                      </span>                    
                  </div>
                  <input type="password" class="form-control" placeholder="Password" required="required">
              </div>
          </div>        
          <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Log in</button>
          </div>
          <div class="bottom-action clearfix">
              <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
              <a href="#" class="float-right">Forgot Password?</a>
          </div> <br>
          <div class="text-center small">Don't have an account! <a href="#">Sign Up</a></div>       
      </form>
      <!-- <p class="text-center small">Don't have an account! <a href="#">Sign up here</a>.</p> -->
    </div>
  </div>

  <?php
include 'footer.php';
 ?>
</body>
</html>