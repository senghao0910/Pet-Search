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
    <script src="vendor1/jquery/jquery.min.js"></script>
    <script src="vendor1/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/scroll.js"></script>
  </head>

  <body>
    <div id="a">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
              <a class="navbar-brand" href="index.html"> <img src="image1/dog.png" width="35 " height="35"> PetSearch</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="index.html">Home
                      
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class=" nav-link" href="search.html">Lost&Found</a>
                  </li>
                  <li class="nav-item">
                      <a class=" nav-link" href="shelter.html">Shelters</a>
                    </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="register.php">Sign in</a>
                    </li>
                  <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
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
          <div class="index">
<section id="tabs" class="project-tab">
        <h1 class="abouthead my-4 text-white text-center"> Animal Shelters</h1>
        <h6  class="text-center" style="color:blue">Below are the contact inforamtion of animal shelters according to different states. Please kindly contact them if you are facing some isses.</h6>
            <div class="container aboutpback">
                   
                    
                    <h3 class="abouthead my-4"> West Coast</h3>
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
    
                                <a  class="nav-item nav-link active"id="kedah" data-toggle="tab" href="#nav-kedah" role="tab" aria-controls="nav-kedah" aria-selected="false">Kedah</a>
                                <a class="nav-item nav-link" id="penang" data-toggle="tab" href="#nav-penang" role="tab" aria-controls="nav-penang" aria-selected="false">Penang</a>
                                <a class="nav-item nav-link" id="perak" data-toggle="tab" href="#nav-perak" role="tab" aria-controls="nav-perak" aria-selected="false">Perak</a>
                                <a class="nav-item nav-link" id="perlis" data-toggle="tab" href="#nav-perlis" role="tab" aria-controls="nav-perlis" aria-selected="true">Perlis</a>
                                <a class="nav-item nav-link" id="selangor" data-toggle="tab" href="#nav-selangor" role="tab" aria-controls="nav-selangor" aria-selected="false">Selangor</a>
                                <a class="nav-item nav-link" id="negeri" data-toggle="tab" href="#nav-negeri" role="tab" aria-controls="nav-negeri" aria-selected="false">Negeri Sembilan</a>
                                <a class="nav-item nav-link" id="melaka" data-toggle="tab" href="#nav-melaka" role="tab" aria-controls="nav-melaka" aria-selected="false">Melaka</a>
                                <a class="nav-item nav-link" id="johor" data-toggle="tab" href="#nav-johor" role="tab" aria-controls="nav-johor" aria-selected="false">Johor</a>
                               
                               
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-kedah" role="tabpanel" aria-labelledby="kedah">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Contact Information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#">LASSie animal shelter</a></td>
                                            <td>Bon Ton Resort, Pantai Cenang, Kedah, 07000 Pulau Langkawi</td>
                                            <td>04-955 3643</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">House of cats</a></td>
                                            <td>Jalan Lumba Kuda, Taman Lumba Kuda, 05250 Alor Setar, Kedah</td>
                                            <td>019-488 0027</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">PakMie Animal Shelter</a></td>
                                            <td>Kampung Ganding, 05300 Alor Setar, Kedah</td>
                                            <td>012-4090489</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h2>___________________________________________________________________________________</h2>
                            </div>
                            <div class="tab-pane fade" id="nav-penang" role="tabpanel" aria-labelledby="penang">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Contact Information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#">SPCA Penang</a></td>
                                            <td>Jalan Jeti Jelutong, Jelutong, 11600 Jelutong, Pulau Pinang</td>
                                            <td>04-281 6559</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">4PAWS Penang Animal Welfare Society</a></td>
                                            <td>429, Jalan Hassan Abbas, Teluk Bahang, 11050 Penang</td>
                                            <td>016-342 0703</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Meowy Cat Shelter</a></td>
                                            <td>501, Jalan Ayer Putih, Bandar Baru Air Putih, 11000 Balik Pulau, Penang</td>
                                            <td>016-422 9091</td>
                                        </tr>
                                        <tr>
                                                <td><a href="#">Pawsitive Pet Animal Clinic</a></td>
                                                <td>NO 45, Lorong 22/SS1, Bandar Tasek Mutiara, 14120 Simpang Ampat, Pulau Pinang</td>
                                                <td>010-883 8739</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h2>___________________________________________________________________________________</h2>
                            </div>
                            <div class="tab-pane fade" id="nav-perak" role="tabpanel" aria-labelledby="perak">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Contact Information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#">ISPCA</a></td>
                                            <td>Lot 38642, 4 1/2 Miles Stone, Jalan Gopeng Ipoh, Perak</td>
                                            <td>016-524 6915</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Pet Care Animal Clinic & Grooming Center</a></td>
                                            <td>33, Jalan Perpaduan Indah 5, Taman Perpaduan Indah, 31400 Ipoh, Negeri Perak</td>
                                            <td>012-475 0160</td>
                                        </tr>
                                      
                                    </tbody>
                                </table>
                                <h2>___________________________________________________________________________________</h2>
                            </div>
                            <div class="tab-pane fade" id="nav-perlis" role="tabpanel" aria-labelledby="perlis">
                                    <table class="table" cellspacing="0">
                                        <thead>
                                            <tr>
                                                    <th>Name</th>
                                                    <th>Address</th>
                                                    <th>Contact Information</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                        <td><a href="#">Bustana Kucing Perlis</a></td>
                                                        <td>Sungai Batu Pahat, 01000 Kangar, Perlis</td>
                                                        <td>013-430 0443</td>
                                                    </tr>
                                          
                                        </tbody>
                                    </table>
                                    <h2>___________________________________________________________________________________</h2>
                                </div>
                                <div class="tab-pane fade" id="nav-selangor" role="tabpanel" aria-labelledby="selangor">
                                        <table class="table" cellspacing="0">
                                            <thead>
                                                <tr>
                                                        <th>Name</th>
                                                        <th>Address</th>
                                                        <th>Contact Information</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="#">SPCA Selangor</a></td>
                                                    <td>Jalan Kerja Air Lama 1, Ukay Heights, 68000 Ampang, Selangor</td>
                                                    <td>03-42565312</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">PAWS Animal Welfare Society</a></td>
                                                    <td>Pilmoor Estate, Subang Airport Road, 47200 Subang, Selangor</td>
                                                    <td>03-7846 1087</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">Second Chance Animal Shelter Malaysia</a></td>
                                                    <td>Pekan Batu 14, Hulu Langat, Selangor, Malaysia Hulu Langat, Negeri Sembilan, Malaysia</td>
                                                    <td>012-919 2263</td>
                                                </tr>
                                                <tr>
                                                        <td><a href="#">Taqwa Animal Shelter</a></td>
                                                        <td>26, Jalan Bersatu, Kampung Sijangkang, 42500 Telok Panglima Garang, Selangor</td>
                                                        <td>012-360 6554</td>
                                                </tr>
                                                <tr>
                                                        <td><a href="#">Berjaya Animal Shelter</a></td>
                                                        <td>45500 Batang Berjuntai, Selangor</td>
                                                        <td>017-883 1008</td>
                                                </tr>
                                                <tr>
                                                        <td><a href="#">S.I Home Shelter</a></td>
                                                        <td>No 1, Jalan SS14/8, Taman Indah Subang Uep, 47500 Subang Jaya, Selangor</td>
                                                        <td>013-513 1833 , 019-325 7861</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <h2>___________________________________________________________________________________</h2>
                                    </div>
                                    <div class="tab-pane fade" id="nav-negeri" role="tabpanel" aria-labelledby="negeri">
                                            <table class="table" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                            <th>Name</th>
                                                            <th>Address</th>
                                                            <th>Contact Information</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="#">Malaysia Compassion Life Association</a></td>
                                                        <td>
                                                                FELDA BUKIT ROKAN UTARA
                                                                GEMENCHEH 73200</td>
                                                        <td>06-431 0719</td>
                                                    </tr>
                                                    <tr>
                                                            <td><a href="#">Second Chance Animal Shelter Malaysia</a></td>
                                                            <td>Pekan Batu 14, Hulu Langat, Selangor, Malaysia Hulu Langat, Negeri Sembilan, Malaysia</td>
                                                            <td>012-919 2263</td>
                                                    </tr>
                                                 
                                                </tbody>
                                            </table>
                                            <h2>___________________________________________________________________________________</h2>
                                        </div>
                                        <div class="tab-pane fade" id="nav-melaka" role="tabpanel" aria-labelledby="melaka">
                                                <table class="table" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                                <th>Name</th>
                                                                <th>Address</th>
                                                                <th>Contact Information</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><a href="#">SPCA Melaka</a></td>
                                                            <td>1115, Lorong Kapten Nekmat, Kampung Kubu, 75050 Melaka</td>
                                                            <td>014-387 4201</td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#">Vally Animal Melaka</a></td>
                                                            <td> No, 109, Jalan Laksamana Cheng Ho, 75000 Malacca</td>
                                                            <td>06-284 9918</td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#">SPCA Semabok</a></td>
                                                            <td>Jalan Semabok, Kampung Ujong, 75050 Melaka</td>
                                                            <td>-</td>
                                                        </tr>
                                                      
                                                    </tbody>
                                                </table>
                                                <h2>___________________________________________________________________________________</h2>
                                            </div>
                                            <div class="tab-pane fade" id="nav-johor" role="tabpanel" aria-labelledby="johor">
                                                    <table class="table" cellspacing="0">
                                                        <thead>
                                                            <tr>
                                                                    <th>Name</th>
                                                                    <th>Address</th>
                                                                    <th>Contact Information</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><a href="#">Cat Tiram Shelter</a></td>
                                                                <td>Jalan Haji Noh, Kampung Sungai Tiram, Johor</td>
                                                                <td>013-748 5544</td>
                                                            </tr>
                                                            <tr>
                                                                <td><a href="#">Noah's Ark Natural Animal Sanctuary</a></td>
                                                                <td>Kampung Ulu Pulai, 81550 Gelang Patah, Johor</td>
                                                                <td>019-715 9199</td>
                                                            </tr>
                                                          
                                                        </tbody>
                                                    </table>
                                                    <h2>___________________________________________________________________________________</h2>
                                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container aboutpback">
                    <h3 class="abouthead my-4"> East Coast</h3>
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="kelantan" data-toggle="tab" href="#nav-kelantan" role="tab" aria-controls="nav-kelantan" aria-selected="true">Kelantan</a>
                                <a class="nav-item nav-link" id="pahang" data-toggle="tab" href="#nav-pahang" role="tab" aria-controls="nav-pahang" aria-selected="false">Pahang</a>
                                <a class="nav-item nav-link" id="terengganu" data-toggle="tab" href="#nav-terengganu" role="tab" aria-controls="nav-terengganu" aria-selected="false">Terengganu</a>
                               
                               
                               
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-kelantan" role="tabpanel" aria-labelledby="kelantan">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Contact Information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#">Candy Pet House</a></td>
                                            <td>Lot 2990-K, Jalan Bayam, Kampung Paya Rambai, 15200 Kota Bharu, Kelantan</td>
                                            <td>09-747 4345</td>
                                        </tr>
                                     
                                    </tbody>
                                </table>
                                <h2>___________________________________________________________________________________</h2>
                            </div>
                            <div class="tab-pane fade" id="nav-pahang" role="tabpanel" aria-labelledby="pahang">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Contact Information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#">Kuantan Animal Rescue & Education</a></td>
                                            <td>26100 Kuantan, Pahang</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Meow Island</a></td>
                                            <td>26600 Pekan, Pahang</td>
                                            <td>meowislandpekan@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Cats Villa Kuantan</a></td>
                                            <td>A-6878, Jalan Kubang Buaya, Taman Peng On, 25250 Kuantan, Pahang</td>
                                            <td> 012-934 9599</td>
                                        </tr>
                                    </tbody>
                                </table> <h2>___________________________________________________________________________________</h2>
                            </div>
                            <div class="tab-pane fade" id="nav-terengganu" role="tabpanel" aria-labelledby="terengganu">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Contact Information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#">Currently No animal shelters found in Terengganu.</a></td>
                                            <td> - </td>
                                            <td> - </td>
                                        </tr>
                                      
                                    </tbody>
                                </table> <h2>___________________________________________________________________________________</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container aboutpback">
                    <h3 class="abouthead my-4"> East Malaysia</h3>
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="sarawak" data-toggle="tab" href="#nav-sarawak" role="tab" aria-controls="nav-sarawak" aria-selected="true">Sarawak</a>
                                <a class="nav-item nav-link" id="sabah" data-toggle="tab" href="#nav-sabah" role="tab" aria-controls="nav-sabah" aria-selected="false">Sabah</a>
                              
                               
                               
                               
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-sarawak" role="tabpanel" aria-labelledby="sarawak">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Contact Information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#">Sarawak Society For The Prevention Of Cruelty To Animals (SSPCA)</a></td>
                                            <td> Lot 1787, Block 233, 6 1/2 Mile, Jalan Penrissen, Kota Sentosa, 93250 Kuching, Sarawak</td>
                                            <td>082-618 200</td>
                                        </tr>
                                     
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-sabah" role="tabpanel" aria-labelledby="sabah">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Contact Information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#">SPCA KK Rehabilitation And Adoption Centre</a></td>
                                            <td>Jalan Kopozon Gana, Mai Aman, 89600 Papar, Sabah</td>
                                            <td>019 880 9660 <p> info@spcakk.org</p></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Society For The Prevention of Cruelty To Animals Sandakan</a></td>
                                            <td>90000 Sandakan, Sabah</td>
                                            <td>010-227 8911</td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>

          <script type="text/javascript">function add_chatinline(){var hccid=90415088;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
      add_chatinline(); </script>
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

    