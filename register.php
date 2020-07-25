<?php
require('navbar.php');
require('db_conn.php');
$error = array();
if($_SERVER['REQUEST_METHOD'] =='POST'){
  $full_name = $_REQUEST['full_name'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
//checking for empty fields
if (empty($full_name)) {
  array_push($error, "full name");
}
if (empty($email)) {
  array_push($error, "email");
}
if (empty($password)) {
  array_push($error, "password");
}
if (count($error)>0) {
  foreach ($error as $key) {
    echo $key; echo "<br>";;
  }
}else{
//checking if the user already exists
  $select = $conn -> prepare('SELECT * FROM users WHERE email =?');
$select->execute([
 $email]);
$query = $select->fetch();
  if($select->rowCount()>0){
    echo "user exists";
  }else{
    $insert = $conn -> prepare('INSERT INTO users (full_name, email, password)VALUES(:full_name,:email,:password)');
    $insert->execute(['full_name'=>$full_name,
      'email'=>$email,
      'password' => $password
    ]);
    if ($insert) {
      $_SESSION['users'] = $email;
      //redirect with ajax
    }else{
      echo "There was a problem registering you";
    }
  }
}
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='css/register.css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
      <div class="signin-box">
      <p class="box-signin-title">Sign In</p>
      <form method="POST">
      <input type="text" name="full_name"class="box-full-name" placeholder="Full Name"><br>
      <input type="email" name="email" class="box-email" placeholder="Email"><br>
      <input type="password" name="password"class="box-password" placeholder="Password"><br>
      <input type="submit" class="box-submit-sign-in" value="Sign in">
      </form>
      </div>
</body>
</html>