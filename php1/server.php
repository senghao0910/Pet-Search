
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
  $edulvl = mysqli_real_escape_string($db, $_POST['edulvl']);
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  if (empty($gender)) { array_push($errors, "Gender is required"); }
  if (empty($location)) { array_push($errors, "Location is required"); }
  if (empty($phone)) { array_push($errors, "Contact Number is required"); }
  if (empty($edulvl)) { array_push($errors, "Education level is required"); }


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

  	$query = "INSERT INTO users (username, email,password,gender,location,phone_no,educationlvl) 
  			  VALUES('$username', '$email', '$password','$gender','$location','$phone','$edulvl')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $user;
    $_SESSION['success'] = "Successful";
  	header('location: login.php');
  }
}

//register emp

if (isset($_POST['reg_emp'])) {
  // receive all input values from the form
  $empname = mysqli_real_escape_string($db, $_POST['empname']);
  $empemail = mysqli_real_escape_string($db, $_POST['empemail']);
  $epassword_1 = mysqli_real_escape_string($db, $_POST['epassword_1']);
  $epassword_2 = mysqli_real_escape_string($db, $_POST['epassword_2']);
  $companyname = mysqli_real_escape_string($db, $_POST['companyname']);
  $state = mysqli_real_escape_string($db, $_POST['state']);
  $contact = mysqli_real_escape_string($db, $_POST['contact']);
  $street = mysqli_real_escape_string($db, $_POST['street']);
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($empname)) { array_push($errors, "Employer's username is required"); }
  if (empty($empemail)) { array_push($errors, "Email is required"); }
  if (empty($epassword_1)) { array_push($errors, "Password is required"); }
  if ($epassword_1 != $epassword_2) {
	array_push($errors, "The two passwords do not match");
  }
  if (empty($companyname)) { array_push($errors, "Company Name is required"); }
  if (empty($state)) { array_push($errors, "State is required"); }
  if (empty($contact)) { array_push($errors, "Contact Number is required"); }
  if (empty($street)) { array_push($errors, "Company Address is required"); }


  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $emp_check_query = "SELECT * FROM employer WHERE empname='$empname' OR empemail='$empemail' LIMIT 1";
  $empresult = mysqli_query($db, $emp_check_query);
  $emp = mysqli_fetch_assoc($empresult);
  
  if ($empname) { // if user exists
    if ($emp['empname'] === $empname) {
      array_push($errors, "Employee Username already exists");
    }

    if ($emp['empemail'] === $empemail) {
      array_push($errors, "Email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$epassword = md5($epassword_1);//encrypt the password before saving in the database

  	$empquery = "INSERT INTO employer (empname, empemail,epassword,companyname,state,contact,street) 
  			  VALUES('$empname', '$empemail', '$epassword','$companyname','$state','$contact','$street')";
  	mysqli_query($db, $empquery);
    $_SESSION['empname'] = $emp;
  	$_SESSION['success'] = "Create employer account successful";
  	header('location: login2.php');
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
          header('location: loginhome.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }

  //login employer

  if (isset($_POST['login_emp'])) {
    $empname = mysqli_real_escape_string($db, $_POST['empname']);
    $epassword = mysqli_real_escape_string($db, $_POST['epassword']);
    //$location=mysqli_real_escape_string($db,$_get['location']);
    
    

  
    if (empty($empname)) {
        array_push($errors, "Employer's username is required to login.");
    }
    if (empty($epassword)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $epassword = md5($epassword);
        $equery = "SELECT * FROM employer WHERE empname='$empname' AND epassword='$epassword'";
        $eresults = mysqli_query($db, $equery);
        if (mysqli_num_rows($eresults) == 1) {
          $logged_in_emp = mysqli_fetch_assoc($eresults);
          $_SESSION['empname'] = $logged_in_emp;
          $_session['epassword'] =$epassword;
           $_SESSION['success'] = "You are now logged in as Employer";
          header('location: loginhome2.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }

  //login admin
  if (isset($_POST['login_admin'])) {
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
          header('location: loginhome3.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }


  
  ?>