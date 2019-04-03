
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
              <a class="nav-link" href="adminindex.php?logout='1'">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="index">
    <h1 class="abouthead my-4 text-white"> User List</h1>
    <div class ="container">
    <table  class="table  table-hover aboutpback"  border=1 cellpadding=1 cellspacing=1>
        <tr>
            <th>User ID</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Gender</th>
            <th>Location</th>
            <th>Phone Number</th>
           
        </tr>
        <?php

            $con = mysqli_connect('localhost', 'root', '', 'registration');

           // mysqli_select_db($con,'mini');

            $sql = "SELECT * FROM users";

            $records = mysqli_query($con,$sql);

            while($row = mysqli_fetch_array($records))
            {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['username']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['password']."</td>";
                echo "<td>".$row['gender']."</td>";
                echo "<td>".$row['location']."</td>";
                echo "<td>".$row['phone_no']."</td>";
              
               
                echo "<td><a href=deleteuser.php?id=".$row['id'].">Delete</a></td>";
            }
        ?>
</table>
          </div>
          </div>
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
