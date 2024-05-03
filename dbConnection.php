<?php

session_start();

    $connection = mysqli_connect('localhost','root','','user');
    
    if($connection){
        // echo "connection successfully";
    }
    else{
        echo "connection failed, contact with developers";
    }


?>
