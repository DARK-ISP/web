<?php 
require_once 'device.php';
require_once 'dbConnection.php';
if(isset($_POST['signup']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
   
    $ip;

    $hashpw = password_hash($password,PASSWORD_BCRYPT);
    $hashemail = password_hash($email,PASSWORD_BCRYPT);

   
   if(!($email)){

      echo "hello";



   }





}
?>


