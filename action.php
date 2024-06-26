<?php

use function PHPSTORM_META\sql_injection_subst;

require_once 'device.php';
require_once 'dbConnection.php'; 
if (isset($_POST['signup'])) {


   //set rules 

   function data($input)
   { 
      $cleanInput = trim(strip_tags($input));

      $pattern = '/^[a-zA-Z]+$/';



      if (!preg_match($pattern, $cleanInput)) {

         header("location: signup.php");
         $_SESSION['error'] = "invalid character";
         exit;
      }



      return $cleanInput;
   };




   $fname = data($_POST['fname'], FILTER_SANITIZE_STRING);
   $lname = data($_POST['lname'], FILTER_SANITIZE_STRING);
   $email = trim($_POST['email'], FILTER_SANITIZE_EMAIL);
   $password = $_POST['password'];
   $session = $password . $lname . rand(1, 1900000);

   $ip;

   $hashpw = password_hash($password, PASSWORD_BCRYPT);
   $hashemail = password_hash($session, PASSWORD_BCRYPT);

   $checkuery = "SELECT * FROM `data` WHERE email = '$email'";
   $extract = mysqli_query($connection, $checkuery);

   if ($extract) {

      $result = mysqli_num_rows($extract);
      if ($result > 0) {

         $_SESSION['error'] =  "already exist account with this email";
         header('location: signup.php');
      } else {

         $query = "INSERT INTO `data`(`fname`, `lname`, `email`, `auth`, `password`, `ip`) VALUES ('$fname','$lname','$email','$hashemail','$hashpw','$ip')";
         $run = mysqli_query($connection, $query);


         if ($run) {

            $fetchQuery = "SELECT * FROM `data` where email = '$email'";
            $fetchRun = mysqli_query($connection, $fetchQuery);

            $fetchResult = mysqli_num_rows($fetchRun);
            if ($fetchResult >= 1) {

               $loginRow = mysqli_fetch_assoc($fetchRun);

               //varify password 

               if (password_verify($password, $loginRow['password'])) {

                  $_SESSION['id'] = $loginRow['id'];
                  $_SESSION['fname'] = $loginRow['fname'];
                  $_SESSION['lname'] = $loginRow['lname'];
                  $_SESSION['email'] = $loginRow['email'];
                  $_SESSION['ip'] = $loginRow['ip'];
                  $_SESSION['date'] = $loginRow['date'];
                  $_SESSION['auth'] = $loginRow['auth'];

                  header("location: auth/index.php");
               } else {
                  header('location: signup.php');
                  $_SESSION['error'] =  "something went wrong";
               }
            }
         } else {
            header('location: signup.php');
            $_SESSION['error'] = "account not created ";
         }
      }
   } else {
      header('location: signup.php');
      $_SESSION['error'] = " something went wrong";
   }
};
