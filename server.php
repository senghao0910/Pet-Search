
<?php 
session_start();

// initializing variables
$username = "";
$email    = "";
$password="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $location = mysqli_real_escape_string($db, $_POST['location']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $firstname= mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  if (empty($firstname)) { array_push($errors, "First Name is required"); }
  if (empty($lastname)) { array_push($errors, "Last Name is required"); }
  if (empty($gender)) { array_push($errors, "Gender is required"); }
  if (empty($location)) { array_push($errors, "Location is required"); }
  if (empty($phone)) { array_push($errors, "Contact Number is required"); }
  


  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database
  	$query = "INSERT INTO users (username, email,password,gender,location,phone_no,firstname,lastname) 
  			  VALUES('$username', '$email', '$password','$gender','$location','$phone','$firstname','$lastname')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $user;
    $_SESSION['success'] = "Successful";
  	header('location: login.php');
  }
}




// ... 


// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    //$location=mysqli_real_escape_string($db,$_get['location']);
    
    

  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $logged_in_user = mysqli_fetch_assoc($results);
          $_SESSION['username'] = $logged_in_user;
          $_session['password'] =$password;
           $_SESSION['success'] = "You are now logged in";
          header('location: userindex.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }

  
  //login admin
  if (isset($_POST['login_admin'])) {
    $adminid = mysqli_real_escape_string($db, $_POST['adminid']);
    $apassword = mysqli_real_escape_string($db, $_POST['apassword']);
    //$location=mysqli_real_escape_string($db,$_get['location']);
    
    

  
  if (empty($adminid)) {
        array_push($errors, "Admin ID is required.");
    }
    if (empty($apassword)) {
        array_push($errors, "Password is required.");
    }
  
    if (count($errors) == 0) {
        $aquery = "SELECT * FROM admin WHERE adminid='$adminid' AND apassword='$apassword'";
        $aresults = mysqli_query($db, $aquery);
        if (mysqli_num_rows($aresults) == 1) {
          $logged_in_admin = mysqli_fetch_assoc($aresults);
          $_SESSION['adminid'] = $logged_in_admin;
          $_session['apassword'] =$apassword;
           $_SESSION['success'] = "You are now logged in as Administrator";
          header('location: adminindex.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }


  
  ?>