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

    <title>About Us</title>

   
    <!-- Bootstrap core CSS -->
    <link href="vendor1/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
<div class="index">
      <!-- Page Content -->
    <div class="container  text-white">
      <img class="aboutpt" src="image1/logo1.png" alt="pt-logo" height="220" width="200">
<div class="dd">
      <h1 class="abouthead my-4"> About PetSearch</h1>
      <div class="aboutpback text-center">
      <p class="aboutpad">PetSearch is an online pet searching platform for people to find their lost pets. It also have some features which can help users such as finding shelters nearby their area and listing lost pets.</p>
      <hr>
      <h1 class="aboutpad aboutv">Vision</h1>
       ->Help animals to find their true & lovely home.
      <hr>
      <h1 class="aboutpad aboutv">Mission</h1>
      <p class="aboutpad" style="text-align: left">1. To develop an effective an efficient pet finder website development to users.</p>
      <p class="aboutpad" style="text-align: left">2.Provide the animal shelters function and the information needed for users to reduce complexity of searching the lost pets.</p>
      <p class="aboutpad" style="text-align: left">3.To increase the awareness of people about missing pets issues in Malaysia.</p>
      <hr>
      <h1 class="aboutpad aboutv">Terms & Conditions</h1>
      <p class="aboutpad text-justify"> In order to provide a harmonious and effective environment for our community, please carefully adhere to the following Terms & Conditions when participating at PetSearch. You must agree to the following rules if you wish to participate at PetSearch. </p>
     
      <p class="aboutpadding text-justify" style="text-align: left">LOST: This section is for listing pets that are Lost. If you have recovered your pet subsequently, please change the status to Owner's Pet accordingly.
       </p> <p class="aboutpadding text-justify" style="text-align: left">FOUND: This section is for listing pets that are Found, where the rightful owner is being sought after. If you managed to find its actual owner thereafter, you can either change its status to Owner's Pet or just deactivate it.
      </p>
      <p class="aboutpadding text-justify" style="text-align: left">PetFinder.my reserves the right to remove any listings deemed inaccurate or in violation of terms without prior notice, and the violating account may be blacklisted.
      </p>
    </p> <p class="aboutpadding text-justify" style="text-align: left">Reporting Abuses & Scams: If you have witnessed any scams, problems or disputes, please<a href="contact.html"> Contact Us</a> for further action. 
    </div>
      </div>
    </div>
    </div>
   
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
</div>
  </body>

</html>
