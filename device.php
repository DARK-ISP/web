<?php
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $client_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $client_ip = $_SERVER['REMOTE_ADDR'];
    }
    $ip = $client_ip;
?>