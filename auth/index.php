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
    <div class="wrapper">
        <div class="logo">
            <img src="images/414176406_947692406719336_209650647001726808_n.png">
        </div>
        <ul class="nav-area">
            <li><a href="index.html">Home</a></li>
            <li><a href="author.html">Author</a></li>
            <li><a href="quote.html">Quote</a></li>
            <li><a href="about.html">About us</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </div>
    <div class="welcome-text">
        <h1>Welcome To ABS Quotes</h1>
        <a href="contact.html">Contact </a>
    </div>
   </header>
</body>
</html>