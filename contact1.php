<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
 
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor1/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <!-- Custom styles for this template -->
    <link href="css2/heroic-features.css" rel="stylesheet">
    <link rel="stylesheet" href="css2/owncss.css">
    <script src="js/scroll.js"></script>
  </head>

  <body>
    <div id="a">
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
                        <a class="dropdown-item d1" href="userprofile.php">View Profile</a>
                        <a class="dropdown-item d1" href="editprofile.php">Edit Profile</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"id="navbarDropdown"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lost&Found</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item d1" href="search1.html">View Pets</a>
                        <a class="dropdown-item d1" href="refine.php">Refine Search</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item d1" href="listpet.php">List Pets</a>
                      
                  </div>
                </li>
                <li class="nav-item">
                        <a class=" nav-link" href="shelter1.php">Shelters</a>
                      </li>
                <li class="nav-item">
                        <a class=" nav-link" href="about1.php">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="contact1.php">Contact</a>
                      </li>
            <li class="nav-item">
              <a class="nav-link" href="userindex.php?logout='1'">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div id="linee"></div>
    <!-- Page Content -->
  
<div class="index">
      <!-- Jumbotron Header -->

      <div class="container contactmain">
        <h1 class="abouthead text-center my-4 contactheadback"> Help Centre</h1>
        <div class="contacttext">
        <p style="text-decoration: underline;">Contact Us </p>
        <p><img class="contactimg" src="image1/contact.jpg" width="500" height="300" alt="company-image"></p>
           
        <p class="contactspan  text-center ">05-659 1234</p>
        <p class="contactspan  text-center ">petsearch2019@hotmail.com</p>
        <span class="contactspan text-center ">Jalan Universiti, Bandar Barat, 31900 Kampar, Negeri Perak, Malaysia 
        <iframe width="1000" height="350"  id="gmap_canvas" src="https://maps.google.com/maps?q=university%20tunku%20abdul%20raman&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.emojilib.com"></a><style>.mapouter{position:relative;text-align:right;height:50px;width:50px;}.gmap_canvas {overflow:hidden;background:none!important;height:50px;width:60px;}</style>
    </span>
       <p style="text-decoration: underline;">Customer Support</p>
          
       <p class="contactspan ">Mon-Fri, 8:00 AM - 7:00 PM</p>
       <p class="contactspan ">Sat-Sun, 9:00 AM - 5:00 PM</p>
       <p class="contactspan ">Public Holiday, 9:00 AM - 12:30PM</p>
      </div>
    </div>
      <!-- /.row -->
    </div>


    <!-- /.container -->
    <script type="text/javascript">function add_chatinline(){var hccid=90415088;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
      add_chatinline(); </script>


    <!-- Footer -->
    
    <footer class="py-5 bg-dark">
            <div class="container">
              <p class="m-0 text-center text-white">Copyright &copy; 2019 PetSearch. All Rights Reserved</p>
              <h3 class="text-secondary">Contact us</h3>
              <p class="m-0  text-white"><img src="image1/email-icon.png" alt="email-icon" height="15" width="20"> petsearch2019@hotmail.com</p>
                
                <p class="m-0  text-white"><img src="image1/phone-icon.png" alt="phone-icon" height="20" width="20"> 05-659 1234</p>
              
                <p class="m-0  text-white"><img src="image1/address-icon.png" alt="address-icon" height="20" width="20"> No 1, Jalan Universiti, Bandar Barat, 31900 Kampar, Negeri Perak, Malaysia 
                <span class="float-right m-0  text-white"> | <a class="btm" href="about1.php"> About </a> | <a class="btm" href="register.php"> Join Us </a> | <a class="btm" href="contact1.html"> Contact Us </a> | <a class="btm" href="about1.php"> Terms & condition </a></span></p>
            </div>
        
          </footer>
    
        <!-- Bootstrap core JavaScript -->
        <script src="vendor1/jquery/jquery.min.js"></script>
        <script src="vendor1/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
