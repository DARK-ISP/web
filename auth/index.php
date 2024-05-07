<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUOTE SHARING WEBSITE</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    <?php
    session_start();
    include_once '../checkAuth.php';

    ?>



</head>

<body>
    <header>

        <?php include_once 'header.php'; ?>

        <div class="welcome-text">
            <h1>Welcome To ABS Quotes</h1>
            <a href="./quote.php"> GET STARTED</a>
        </div>
    </header>
</body>

</html>