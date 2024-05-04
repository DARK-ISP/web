<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUOTE SHARING WEBSITE</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


<style>

.quote{
    background-color: transparent;
    
    border: 3px solid black;
  
    height: auto;
    width: 50%;
    border-radius: 20px;
    position: absolute;
    left: 25%;
    top: 140px;
    color: white;
}

.qtxt{
    font-size: large;
    text-align: left;
    padding: 30px;
    z-index: 1;
}
.details{
    display: flex;
    gap: 40%;
    padding: 30px;
    z-index: 1;

}

</style>



</head>
<body>
   <header>
   
<?php
include_once 'header.php';

?>



 <!-- quote box -->

 <center>



<div class="quote">

    <p class="qtxt">
       " hello "

        <br>

       <div class="details">

        <strong>date: 9090</strong>
        <strong> <i>-hello</i></strong>

       </div>


    </p>

</div>


 </center>


   </header>
</body>
</html>