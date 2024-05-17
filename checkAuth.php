<?php
error_reporting(0);
session_start();

if (!isset($_SESSION['auth']) || !$_SESSION['auth']) {
    header("location: ../login.php");
}
