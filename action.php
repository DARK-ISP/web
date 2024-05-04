<?php

use function PHPSTORM_META\sql_injection_subst;

require_once 'device.php';
require_once 'dbConnection.php';
if(isset($_POST['signup']))
{


   //set rules 

   function data($input){
      $cleanInput = trim(strip_tags($input));
      
       $pattern = "/^[a-zA-Z]+$/";

     
      
      if(!preg_match($pattern, $cleanInput)){
      
         echo "invalid character";
         
      }
     
    
      
      return $cleanInput;
   };




    $fname = data($_POST['fname'],FILTER_SANITIZE_STRING);
    $lname = data($_POST['lname'],FILTER_SANITIZE_STRING);
    $email = trim($_POST['email'],FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
   $session = $password.$lname.rand(1,1900000);
   
    $ip;

    $hashpw = password_hash($password,PASSWORD_BCRYPT);
    $hashemail = password_hash($session,PASSWORD_BCRYPT);

   $checkuery = "SELECT * FROM `data` WHERE email = '$email'";
   $extract = mysqli_query($connection, $checkuery);

      if($extract){
      
         $result = mysqli_num_rows($extract);
         if($result>0){
            echo "already exist account with this email";

         }
         else{
           
            $query = "INSERT INTO `data`(`fname`, `lname`, `email`, `auth`, `password`, `ip`) VALUES ('$fname','$lname','$email','$hashemail','$hashpw','$ip')";
            $run = mysqli_query($connection, $query);


            if($run){
               
               $fetchQuery = "SELECT * FROM `data` where email = '$email'";
               $fetchRun = mysqli_query($connection, $fetchQuery);

               $fetchResult = mysqli_num_rows($fetchRun);
               if($fetchResult>=1){

                  $loginRow = mysqli_fetch_assoc($fetchRun);

                  //varify password 

                  if(password_verify($password,$loginRow['password'])){
                    
                    echo $_SESSION['fname'] = $loginRow['fname'];
                    $_SESSION['lname'] = $loginRow['lname'];
                    $_SESSION['email'] = $loginRow['email'];
                    $_SESSION['ip'] = $loginRow['ip'];
                    $_SESSION['date'] = $loginRow['date'];

                     header("location: auth/index.php");


                  }
                  else{
                     echo "something went wrong";
                  }

               }



            }
            else{
               echo "account not created ";
            }


         }



      }
      else{
         echo " something went wrong";
      }
   




   

 





}
?>


