<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QUOTE SHARING WEBSITE</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">




  <style>
    /* Use meaningful class names for better readability */
    .profile-card {
      display: flex;
      flex-direction: column;
      align-items: center;
      background-color: #f5f5f5;
      border-radius: 5px;
      padding: 20px;
      width: 300px;
      /* Adjust width as needed */
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      margin: 20px auto;
      position: absolute;
      left: 40%;
      top: 20%;
    }

    .profile-image {
      width: 150px;
      height: 150px;
      background-color: black;
      border-radius: 50%;
      object-fit: cover;
      /* Maintain aspect ratio and crop if needed */
    }

    .content {
      text-align: center;
      margin-top: 25px;
    }

    .name {
      color: black;
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .job-title {
      font-style: italic;
      margin-bottom: 10px;
    }

    .social-links {
      display: flex;
      justify-content: center;
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .social-link {
      margin: 0 5px;
    }

    .social-link i {
      font-size: 20px;
      color: #333;
    }

    .social-link:hover i {
      color: #00aced;
      /* Change hover color as desired */
    }

    .bio {
      margin-top: 15px;
      font-size: 14px;
      line-height: 1.5;
    }
    a{
      text-decoration:none;
    }
  </style>







</head>

<body>
  <header>
    <?php
    include_once 'header.php';
    session_start();
    ?>



    <form action="../logout.php" method="post">


      <div class="profile-card">
        <br>
        <!-- <img src="profile-picture.jpg" alt="Profile Picture" class="profile-image"><br> -->
        <div class="content">
          <h2 class="name"> <?php echo $_SESSION['fname'] . " " . $_SESSION['lname']; ?> </h2><br><br>
          <p class="job-title">your ip address: <?php echo $_SESSION['ip']  ?> </p>
          email: <?php echo  $_SESSION['email']  ?>
          <ul class="social-links">
            <!-- <li><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#" class="social-link"><i class="fab fa-github"></i></a></li>
        <li><a href="#" class="social-link"><i class="fab fa-linkedin"></i></a></li> -->
          </ul>
          <p class="bio"> Hello <?php echo $_SESSION['fname']; ?> welcome To ABS Quotes.</p>
          <br>
        
          <button name="logout" type="submit">
          <a href="./view.php">See More</a>
          </button>

          <br>

          <br>
          <button name="logout" type="submit">
          <a href="./addQuote.php">Add Quote</a>
          </button>

          <br><br>
          <button style="color:red;" name="logout" type="submit">
            Log Out
          </button>

    </form>







    </div>
    </div>
    <script src="https://kit.fontawesome.com/your_fontawesome_kit_id.js" crossorigin="anonymous"></script>






    <script>


    </script>


  </header>
</body>

</html>