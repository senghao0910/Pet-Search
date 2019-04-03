<!DOCTYPE html>
<html lang="en">

  <head>
      <?php include('server.php') ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/owncss.css">
    <link rel="stylesheet" href="css2/register.css">
  

  </head>

  <body>

<div class="lline">
</div>
    <div class="container">
        <a href="index.html"><img class="registerhome" src="image1/logo1.png" alt="pt-logo" height="190" width="200"></a>
                  <h3 class="form-title text-center">Registration <img  src= "image1/foot.png" alt="pet-logo" height="30" width="30"></h3>
                  <form method="post" action="register.php">
                  <?php include('errors.php'); ?>
                    <div class="form-group">
                    
                      <label for="username">Username : </label>
                  <input required autofocus class="form-control" id="username" type="text"name="username" />
                </div>
                <div class="form-group">
                    <label for="password">Password : </label>
                  <input  required class="form-control" id="password" name="password_1"type="password"  />
                </div>
                <div class="form-group">
                  <label for="password">Confirm Password : </label>
                <input  required class=" form-control" name="password_2"id="password" type="password"  />
              </div>
              <div class=" gr form-row">
                    <div class="form-group">
                        <label for="firstname">FirstName: </label>
                        <input   name="firstname"id="firstname" type="text"  class="rcl form-control" />
                      </div>
                      <div class="form-group">
                        <label for="lastname">LastName : </label>
                        <input   name="lastname"id="lastname" type="text" class="rcl form-control " />
                      </div>
                    </div>
            
  <div class=" gr form-row">
                    <div class="form-group">
                        <label for="location">Location : </label>
                      <select required id="state" name="location" class="rcl form-control input-lg">
                      <option value="0" selected disabled>Location</option>
                      <option value="Johor">Johor</option>
                    <option value="Kedah">Kedah</option>
                    <option value="Kelantan">Kelantan</option>
                    <option value="Malacca">Malacca</option>
                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                    <option value="Pahang">Pahang</option>
                    <option value="Penang">Penang</option>
                    <option value="Perak">Perak</option>
                    <option value="Perlis">Perlis</option>
                    <option value="Sabah">Sabah</option>
                    <option value="Sarawak">Sarawak</option>
                    <option value="Selangor">Selangor</option>
                    <option value="Terengganu">Terengganu</option>
                    <option value="Foreign country">Foreign country</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="education-level">Gender : </label>
                      <select required id="gender" name="gender" class="rcl form-control input-lg" >
                        <option value="0" selected disabled>Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        </select>
                      </div>
                    </div>
                      <div class="form-group">
                          <label for="Email">Email : </label>
                        <input  required class="form-control" id="email" type="email" name="email" value="<?php echo $email; ?>"/>
                        </div>
                        <div class="form-group">
                            <label for="Phone-Number">Phone Number : </label>
                          <input required class="form-control input-lg" name="phone" placeholder="HP.No 01X-XXXXXXX" id="phone" type="tel"/>
                          </div>
                          <hr>
                  <input type="submit" name ="reg_user" value="Register Now" class="btn btn-success btn-sm loginbtn" />
                  <div> <small>Already a member? <a class="l2r"href="login.html">Sign in</a></small></div>
                 
                <small class="form-text registertext text-light">We'll never share your information with anyone else.</small>
                <hr>
                  </form>

  </div>
  
   
  </body>

</html>
