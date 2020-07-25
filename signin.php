<?php
require('navbar.php');
$error = array();
if($_SERVER['REQUEST_METHOD'] =='POST'){
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
if (empty($email)) {
  array_push($error, "email");
}
if (empty($password)) {
  array_push($error, "password");
}
if (count($error)>0) {
  foreach ($error as $key) {
    echo "string";
  }
}else{

}
    
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='css/signin.css'>
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Sign In</title>
  </head>
  <body>
      <div class="signin-box">
      <p class="box-signin-title">Sign In</p>
      <form action="" method="POST">
      <input type="text" name="email" class="box-email" placeholder="Email"><br>
      <input type="text" name="password" class="box-password" placeholder="Password"><br>
      <input type="submit" name="signin" class="box-submit-sign-in" value="Sign in">
      </form>
      </div>
  </body>
</html>
