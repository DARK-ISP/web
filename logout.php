<?php

//auth logout page 

if (!isset($_SESSION['auth'])) {
    header('location: login.php');
}



if (isset($_POST['logout'])) {
    session_start();
    session_destroy();
    header('location: login.php');
}
