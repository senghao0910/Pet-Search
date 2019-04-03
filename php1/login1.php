

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="../css/login.css">
 

  </head>

  <body background="image/petbackground.jgp">
        <a class="loginhome" href="index.html"><img class="loginpt" src="../image/petlogo.jpg" alt="pt-logo" height="150" width="100"></a>
<div class="lline">
</div>
    <div class="container"  >
    
      <div class="row">
          <div class="col-md-12 loginbox">
              <div class="pr-wrap">
                  <div class="pass-reset">
                      
                      <label>
                          Enter the email you signed up with</label>
                      <input type="email" placeholder="Email" />
                      <input type="submit" value="Submit" class="pass-reset-submit btn btn-success btn-sm" />
                  </div>
              </div>
              <div class="wrap">
                  <p class="form-title">
                      Sign In</p>
                  <form method="post" action="login.php" class="login">
                                          <input class="logbutton" type="text"name="username"  placeholder="Username" />
                  <input class="logbutton" type="password"name="password" placeholder="Password" />
                  <input type="submit"  name="login_user"value="Sign In" class="btn btn-success btn-sm loginbtn" />
                  <div class="remember-forgot">
                      <div class="row">
                          <div class="col-md-6">
                              <div class="checkbox">
                                  <label>
                            
                                      
                                  </label>
                              </div>
                          </div>
                          <div class="lr ">Not a member yet? <a class="r2l"href="register.php">Sign Up Now</a></div>
                    <div class="rr"><a href="login2.php">Log in as Employers</a> </div><div class="rr"><a href="login3.php">Log in as Admin</a></div>
                        </div>
                  </div>
                  </form>
              </div>
          </div>
      </div>

  </div>
  
   
  </body>

</html>
