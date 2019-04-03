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

    <title>Pet Search Homepage</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor1/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css2/heroic-features.css" rel="stylesheet">
    <link rel="stylesheet" href="css2/owncss.css">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="adminindex.php"> <img src="image1/dog.png" width="35 " height="35"> PetSearch</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link active" href="adminindex.php">Home
                
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

    <div class="index">
    <!-- Page Content -->
    <div class="container">
      
      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
	  <div class="home1 view overlay">
        <h1 class="display-3">Welcome Back To PetSearch! </h1>
        <p class="lead"><?php echo $_SESSION['adminid']['alastname']?> <?php echo $_SESSION['adminid']['afirstname']?> ,Kindly Thanks to serve PetSearch as an Administrator! </p>
	
		</div>
      </header>

      <!-- Page Features -->
      <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4 ">
          <div class="card">
            <img class="card-img-top homecard" src="image1/userlist.png" alt="search-pet" height="170" width="170">
            <div class="card-body">
              <h4 class="card-title">View Users List</h4>
              <p class="card-text">View current user list and find out the user's info. Delete Users with harassment.</p>
            </div>
            <div class="card-footer">
              <a href="viewuser.php" class="hbtm btn btn-primary">View Now!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
              <img class="card-img-top homecard" src="image1/pending.jpg" alt="find-shelter" height="170" width="208">
              <div class="card-body">
                <h4 class="card-title">View Pending Post</h4>
                <p class="card-text">Check for the pending post first before posting. Pets post need to validate by Administrator to prevent duplicate or harass post.</p>
              </div>
              <div class="card-footer">
                <a href="viewpost.php" class="hbtm btn btn-primary">View pending post!</a>
              </div>
            </div>
          </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top homecard" src="image1/shelter.png" alt="about-us"  height="160" width="208">
            <div class="card-body">
              <h4 class="card-title">Animal Shelter</h4>
              <p class="card-text">Looking for animal shelters around your area? Check this out to get the info of animal shelters within location!  </p>
            </div>
            <div class="card-footer">
              <a href="shelter2.php" class="hbtm btn btn-primary">Check it now!</a>
            </div>
          </div>
          

        </div>
        <div class="col-lg-3 col-md-6 mb-4 view overlay zoom">
          <div class="card mask flex-center">
            <img class="card-img-top homecard" src="image/aboutus.png" alt="about-us"height="160" width="208">
            <div class="card-body">
              <h4 class="card-title">About Us</h4>
              <p class="card-text">PetSearch is an online pet searching platform for people to find their lost pets. It also has some mission&vision by creating this platform. </p>
            </div>
            <div class="card-footer">
              <a href="about2.php" class="hbtm btn btn-primary">More!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

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
