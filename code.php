<?php
include 'connect.php';

if (isset($_POST['submit'])) {

    $name = $_POST['fname'];
    $pass = $_POST['password'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $cpass = $_POST['cpassword'];
    
    if ($pass === $cpass)
    { 
      $qry = "INSERT INTO login VALUES (Null,'$name','$pass','$lname','$phone',$email','$phone','$cpass');";
      $result=$conn->query($qry);
         
          if ($result) 
          {
          $_SESSION['success']="Account Created Successfully";
          echo'<script>window.location.replace("login.php");</script>';
          }

          else
          {
          $_SESSION['status']="Account not created";
          echo'<script>window.location.replace("signup.php");</script>';    
            }

            }
             else {
            $_SESSION['status']="Password and Confirm Password does not match";
                  echo'<script>window.location.replace("adminprofile.php");</script>';
             }
        }
        
?>
