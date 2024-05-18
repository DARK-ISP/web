<?php
// getQuotes.php

header('Content-Type: application/json');
require_once "../dbConnection.php";

$query = "SELECT quote, mention FROM quote";
$result = mysqli_query($connection, $query);

$quotes = array();
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $quotes[] = array('quote' => $row['quote'], 'author' => $row['mention']);
    }
    echo json_encode($quotes);
} else {
    echo json_encode(array('error' => 'Error fetching data: ' . mysqli_error($connection)));
}

mysqli_close($connection);
?>
