<?php 
  session_start(); 

  if (!isset($_SESSION['adminid'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login2.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['adminid']);
  	header("location: login2.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Heroic Features - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor1/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css2/heroic-features.css" rel="stylesheet">
    <link rel="stylesheet" href="css2/owncss.css">
  </head>

  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="userindex.php"> <img src="image1/dog.png" width="35 " height="35"> PetSearch</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link active" href="userindex.php">Home
                
              </a>
            </li>
           
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"id="navbarDropdown"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Profile</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item d1" href="adminprofile.php">View Profile</a>
                        <a class="dropdown-item d1" href="adminedit.php">Edit Profile</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"id="navbarDropdown"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Checking</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item d1" href="viewuser.php">View Users</a>
                        <a class="dropdown-item d1" href="viewpost.php">View Pending Post</a>
                      
                  </div>
                </li>
                <li class="nav-item">
                        <a class=" nav-link" href="shelter2.php">Shelters</a>
                      </li>
                <li class="nav-item">
                        <a class=" nav-link" href="about2.php">About</a>
                      </li>
                     
            <li class="nav-item">
              <a class="nav-link" href="adminrindex.php?logout='1'">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- Page Content -->


    <div class="index">
    <div class="container">
      <!-- Page Features -->
      <div class="header">
        <h2 style="font-family:Comic Sans MS, cursive, sans-serif;"> Administrator Profile Information	</h2>
      </div>
      <div class="content">
          <!-- notification message -->
         
        </div>

      
         
    <div class="aboutpback ">
      <div id="profile" class="profile col-lg-3 col-md-6 mb-4">
          <!-- logged in user information -->
        <img src="image1/adminpro.png" width="250" height="250" alt="Your Profile Picture" />
        <?php  if (isset($_SESSION['adminid'])) :?> 
        <h4 style="font-family:Comic Sans MS, cursive, sans-serif;">Hello, <?php echo $_SESSION['adminid']['alastname']?> <?php echo $_SESSION['adminid']['afirstname']?></h4>
        <p><img src="image1/username.png" height=20 width=20>Admin ID: <strong><?php echo $_SESSION['adminid']['adminid'] ?></strong></p> 
        <p><img src="image1/email.png" height=18 width=20> Email: <strong><?php echo $_SESSION['adminid']['aemail'] ?></strong></p> 
        <p><img src="image1/phone.png" height=20 width=20> Contact No: <strong><?php echo $_SESSION['adminid']['aphone'] ?></strong></p>
      <p><img src="image1/gender1.png" height=22 width=25>Gender: <Strong> <?php echo $_SESSION['adminid']['agender']; ?></strong></p>
         <p><img src="image1/location.png" height=22 width=20> Location: <Strong><?php echo $_SESSION['adminid']['alocation'];?></strong></p>
         <p><img src="image1/location.png" height=22 width=20> Address: <Strong><?php echo $_SESSION['adminid']['aaddress'];?></strong>, <Strong><?php echo $_SESSION['adminid']['astate'];?></strong></p>
        <?php endif?>
       
      </div>
      </div>
    </div>
</div>
  

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
          <p class="m-0 text-center text-white">Copyright &copy; 2019 PetSearch. All Rights Reserved</p>
          <h3 class="text-secondary">Contact us</h3>
          <p class="m-0  text-white"><img src="image1/email-icon.png" alt="email-icon" height="15" width="20"> petsearch2019@hotmail.com</p>
            
            <p class="m-0  text-white"><img src="image1/phone-icon.png" alt="phone-icon" height="20" width="20"> 05-659 1234</p>
          
            <p class="m-0  text-white"><img src="image1/address-icon.png" alt="address-icon" height="20" width="20"> No 1, Jalan Universiti, Bandar Barat, 31900 Kampar, Negeri Perak, Malaysia 
            <span class="float-right m-0  text-white"> | <a class="btm" href="about2.php"> About </a> | <a class="btm" href="about2.php"> Terms & condition  | </a></span></p>
        </div>
    
      </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor1/jquery/jquery.min.js"></script>
    <script src="vendor1/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

