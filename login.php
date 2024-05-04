

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
  background:url(./images/loginbg.png);
  background-size:cover;
  background-repeat:no-repeat;
  background-position:center;
}
.login-form{
  display:flex; 
  flex-wrap:wrap;
  flex-direction:column;
  background:linear-gradient(45deg, #5467, transparent);  
  box-shadow:2px 4px 5px #000000, 2px 2px 6px #0386ca, 1px 2px 6px rgb(10 21 27); 
  width:300px;
  height:100%;
  margin:auto;  
  border-radius:5px;
  padding:20px;
  margin-top:120px;
}
h2{
  color:#fff;
}
 input{
  width:100%;  
  padding:12px 0px;
  border:none;
  border-radius:5px;
 margin-bottom:20px; 
}
button{
  border:none;
  padding:12px;
  width:100%;
  font-size:16px;
  border-radius:5px;
}
button:hover{
  background:#162029;
  color:#fff;
}
.field{
  position:relative;
}
.field label{
  position:absolute;
  top:30%;
  left:15px;
  transform:translateY(-50%);
  transition:.2s linear;
}
input:focus{
  border:2px solid #fff;
}
input:focus ~ label,
input:valid ~ label {
   top:0;
  left: 15px;
  font-size: 18px;
  padding: 0 7px;
  background: #fff;
  color:#000;
  border-radius:5px;
}
    </style>
</head>
<body>


<?php 
//require_once "action.php";

?>












<form action="action.php">
<div class="login-form">

<!-- <p id="check" style="color: green;">

</p> -->

<script>

// let msg = document.getElementById("check").innerHTML=" <?php echo $_SESSION['account_created'] ?>   ";

// setTimeout(function(){
//  msg = document.getElementById("check").innerHTML="";
// },3000)

</script>


<h2>Login</h2>
<div class="form">
<div class="field">
<input type="text" required spellcheck="false" >
<label>Username</label>
</div>
<div class="field">
<input type="text" required spellcheck="false" >
<label>Password</label>
</div>
<button>Submit</button>
<h5>don`t have an account? <a href="signup.php">create account</a></h5>
</div> </div>
</form>



</body>
</html>


