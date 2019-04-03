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
    <link rel="stylesheet" href="css2/loginadmin.css">
   
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
                     Administrator Sign In</p>
                  <form method="post" action="login2.php" class="login">
                        <?php include('errors.php'); ?>
                  <input class="logbutton" type="text"name="adminid"  placeholder="Admin ID" />
                  <input class="logbutton" type="password"name="apassword" placeholder="Password" />
                  <input type="submit"  name="login_admin" value="Sign In" class="btn btn-success btn-sm loginbtn" />
                  <div class="remember-forgot">
                      <div class="row">
                          <div class="col-md-6">
                         
                                  <label>
                                  <div class="rr"><a  style="font-size:14px" href="login.php">Log in as User</a></div>
        
                                  </label>
                              </div>
                          </div>
                          <div class="lr ">Click Here to PetSearch <a class="rr"href="index.html">PetSearch</a></div>
                
                </div>
                         
                  </div>
                  </form>
              </div>
          </div>
      </div>

  </div>

  
  </body>

</html>
