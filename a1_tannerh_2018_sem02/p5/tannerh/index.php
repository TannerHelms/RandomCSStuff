
<script>console.log("inside of login.php")</script><script>console.log("completed connectDB.php")</script>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
    <style type="text/css">

body {font: 14px sans-serif; }

.wrapper {width: 350px; padding: 20px; }
    </style>
  </head>
  <body>

<div class="wrapper">
<h2>Login</h2>
<p>
  Please fill in your credentials to login.
</p>

<form action="/the/p5/chickennugget/login.php" method="post">
  <div class="form-group" ''>

    <label>Username</label>
    <input type="text" name="username" class="form-control" value=''''>

<span class="help-block"></span>
</div>

<div class="form-group" ''>

  <label>Password</label>
  <input type="text" name="password" class="form-control" value=''''>

<span class="help-block"></span>
</div>

<div class="form-group">

<input type="submit" class="btn btn-primary" value="Login" />
</div>

<p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
</form>
</div>
  </body>
</html>
