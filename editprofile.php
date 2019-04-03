
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
		<link href="css2/heroic-features.css" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
		<!-- Custom styles for this template -->
		<link rel="stylesheet" href="css2/owncss.css">
		<link rel="stylesheet" href="css2/diu.css" >
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
    <h3 class="edit2title form-title text-center" style="font-family:Comic Sans MS, cursive, sans-serif">Edit Profile</h3>
    <div class="aboutpback ">
	<form class="edit2form" method="post" action="edit.php">
	<div class="form-row">
	<div class="form-group">
		
		<label>Username</label>
		<input autofocus placeholder="New Username" class="edit2form1 form-control" id="username" type="text" name="usernametest">
		</div>
		<div class="form-group">
		<label>Email</label>
		<input type="email"  placeholder="New Email" class="edit2form1 form-control" name="email">
		</div>
		</div>

		<div class="form-group">
		<label>Password</label>
			<input type="password" name="password" placeholder="New Password" class="form-control">
	</div>
			<div class="form-row">
			<div class="form-group">

			
	<label>Gender</label>
	<select tabindex="5" id="gender" name="gender" class="edit2form2 form-control input-lg" >
	<option value="0" selected disabled>Gender</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
			</div>

			<div class="form-group">
			<label>Location</label>
			<select tabindex="6" id="state" name="location" class="edit2form2 form-control input-lg" >
	<option value="0" selected disabled>Location</option>
	<optgroup label="Malaysia">
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
	</optgroup>
	<optgroup label="Other">
	<option value="Foreign country">Foreign country</option>
	</optgroup>

	</select>
			</div></div>
			
					<div class="form-group">
					<label>Phone Number</label>
	<input type="tel" name="phone" id="phone" class="form-control input-lg" placeholder=" New HP.No 01X-XXXXXXX" tabindex="4">
		
		</div>

	<hr>
		<div class="form-group">
		<button type="submit" class="edit2btn btn btn-success btn-sm" hef="edit.php">Edit</button>
		</div>
    </form>
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


  </body>

</html>