<?php
require 'Database.php';
$db=new Database();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="main.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" class="form">
  
  <div class="segment">
    <h1>Sign ip</h1>
  </div>
  
  <label>
    <input type="text" placeholder="Email Address"/>
  </label>
  <label>
    <input type="password" placeholder="Password"/>
  </label>
  <button class="red signInbutton" type="button"><i class="icon ion-md-lock"></i> Log in</button>
  
  <p>Don't have an account?<a href="../SignUp/signUp.php">Register now!</a></p>
  

  
</form>

</body>
</html>