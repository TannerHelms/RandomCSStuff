<?php
session_start();

$_SESSION['password'] = "";
$error = "";

if(isset($_POST['submit_pass'])&&$_POST['pass']) {
  $pass=$_POST['pass'];
  if($pass == "123") {
    $_SESSION['password'] = $pass;
  } else {
    $error="Incorrect Password, Try Again";
  }
}
if(isset($_POST['page_logout'])) {
  unset($_SESSION['password']);
  $_SESSION['password'] = "";
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>password entry</title>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

  <style>
  body {
    margin: 0 auto;
    padding: 0px;
    text-align: center;
    width: 100%;
    font-family: 'Raleway', sans-serif;
    background-color: #0000FF;
  }

  #main p {
    font-size: 16px;
  }

  #logout_form input[type="submit"] {
    width: 250px;
    margin-top: 10px;
    height: 40px;
    font-size: 16px;
    border: 2px solid white;
    color: #FFFFFF;
    background-color: #FF0000;
  }
#form{
  color: red;
}
  </style>
</head>
<body>
  <div id="main">
    <?php
      if($_SESSION['password']=="123") {
     ?>
    <h1>You have logged in succesfully</h1>
    <h3>Place links here to other pages</h3>
    <ol>
      <h4>Click here for my p1</h4>
      <h4>Click here for my p2</h4>
    </ol>
    <h3>... or log out</h3>
    <hr>
    <form method="post" action="" id="logout_form">
      <input type="submit" name="page_logout" value="logout">
    </form>
    <?php
      } else {
     ?>
     <form method="post" action="" id="login_form">
       <h1>Login to our team site</h1>
       <input type="password" name="pass" placeholder="*******">
       <input type="submit" name="submit_pass" value="submit">
       <p>"For testing use password: 123"</p>
       <p><font style="color:red;"><?php if($error != "") {echo $error;} ?></font></p>
     </form>
     <?php
   }
      ?>
  </div>
</body>
</html>
