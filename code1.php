<?php 
include "config.php";
include "connect.php";

  if (isset($_POST['login'])) {
               
    $name = $_POST['fname'];
    $password = $_POST['password'];
    
    $qry = "SELECT * FROM login WHERE fname='$name' AND password='$password'";
    $result=$conn->query($qry);
    
    if ($row = $result->fetch_assoc()) {
        $_SESSION['fname'] = $name;
        echo'<script>window.location.replace("dashboard.php");</script>';
    }
    else{
        $_SESSION['status'] = "Email id / Password is Invalid";
        echo'<script>window.location.replace("login.php");</script>';
    }
  }

  if (isset($_POST['submit'])) {

    $name = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];
    if ($pass === $cpass)
    { 
      $qry = "INSERT INTO login VALUES (Null,'$name','$lname','$email','$pass','$cpass');";
      $result=$conn->query($qry);
         
          if ($result) 
          {
          $_SESSION['success']="Admin added";
          echo'<script>window.location.replace("adminprofile.php");</script>';
          }

          else
          {
          $_SESSION['status']="Admin not added";
          echo'<script>window.location.replace("adminprofile.php");</script>';    
            }

            }
             else {
            $_SESSION['status']="Password and Confirm Password does not match";
                  echo'<script>window.location.replace("adminprofile.php");</script>';
             }
        }
        
 ?>