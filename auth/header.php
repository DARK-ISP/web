<?php include_once '../checkAuth.php'   ?>


<div class="wrapper">
    <div class="logo">
        <img src="images/414176406_947692406719336_209650647001726808_n.png">
    </div>
    <ul class="nav-area">
        <li><a href="index.php">Home</a></li>
        <li><a href="quote.php">Quote</a></li>
        <li><a href="about.php">About us</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="profile.php"> <?php echo $_SESSION['fname'] ?> </a></li>
    </ul>
</div>