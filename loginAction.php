<?php
include_once 'dbConnection.php';


$loginError = "";
$emailError = "";

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];


    $query = "SELECT * FROM `data` WHERE email = '$email'";
    $run = mysqli_query($connection, $query);

    $check = mysqli_num_rows($run);

    if ($check >= 1) {

        $data =   mysqli_fetch_assoc($run);

        if (password_verify($password, $data['password'])) {

            $_SESSION['id'] = $data['id'];
            $_SESSION['fname'] = $data['fname'];
            $_SESSION['lname'] = $data['lname'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['ip'] = $data['ip'];
            $_SESSION['date'] = $data['date'];
            $_SESSION['auth'] = $data['auth'];

            header("location: /web/auth/index.php");
        } else {
            header('location: login.php');
            $_SESSION['loginError'] = "incorrect email or password";
        }
    } else {
        header('location: login.php');
        $_SESSION['loginError'] = "account not available with this email";
    }
}
