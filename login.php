<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor1/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css2/heroic-features.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css2/loginuser.css">
   
  </head>

  <body>
        <a class="loginhome" href="index.html"><img class="loginpt" src="image1/logo1.png" alt="pt-logo" height="150" width="120"></a>
<div class="lline">
</div>
    <div class="container"  >
    
      <div class="row">
          <div class="col-md-12 loginbox">
              
              <div class="wrap">
                  <p class="form-title">
                      Sign In</p>
                  <form method="post" action="login.php" class="login">
                        <?php include('errors.php'); ?>
                  <input class="logbutton" type="text"name="username"  placeholder="Username" />
                  <input class="logbutton" type="password"name="password" placeholder="Password" />
                  <input type="submit"  name="login_user"value="Sign In" class="btn btn-success btn-sm loginbtn" />
                  <div class="remember-forgot">
                      <div class="row">
                          <div class="col-md-6">
                         
                                  <label>
                                  <div class="rr"><a href="login2.php">Log in as Admin</a></div>
        
                                  </label>
                              </div>
                          </div>
                          <div class="lr ">Not a member yet? <a class="rr"href="register.php">Sign Up Now</a></div>
                
                        </div>
                  </div>
                  </form>
              </div>
          </div>
      </div>

  </div>

  
  </body>

</html>
