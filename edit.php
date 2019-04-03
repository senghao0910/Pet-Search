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
<?php
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "registration"; 
    //create connection
    $conn = mysqli_connect($host,$dbusername,$dbpassword,$dbname);
    $id=$_SESSION['username']['username'];
    
       

    $username = mysqli_real_escape_string($conn, $_POST['usernametest']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
   

    $password=md5($password);
    
    if(mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_error().')'
        . mysqli_connect_error());
    }
    else{
            $sql = "UPDATE users set username='$username',email = '$email', password='$password',gender='$gender',location='$location',phone_no='$phone'
             where username='$id'";
           if($conn->query($sql)){
            
           header("refresh:0;url=userindex.php?logout='1'");       
            }
            else{
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('ERROR')
                window.location.href='editprofile.php'
                </SCRIPT>");
            }
        }
        $conn->close();
?>
