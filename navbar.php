<?php
error_reporting(0);
session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='css/navbar.css'>
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  </head>
  <body>
    <nav>
        <div class="nav">
          <div class="logo-background">
            <a href="index.php"><p class="logo">Logo Here</a></p>


          </div> <?php if($_SESSION['users']) { echo'
            <form method="post" class="searching" >
            <input type="text" style="display: block;" class="search" name="search" placeholder="Search">
            </form>
          <div class="right-menu">
              
           <ul class="menu-right">
              <a href="signin.php"><li class="login-menu">Log gin</a></li>
              <a href="logout.php"><li class="register-menu">Log out</a></li>
            </ul>';}else{
            echo'<ul class="menu-right">
              <a href="signin.php"><li class="login-menu">Log in</a></li>
              <a href="register.php"><li class="register-menu">Register</a></li>
            </ul>';}?>
        
          </div>

        </div>
      </nav>