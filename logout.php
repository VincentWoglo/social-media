<?php
session_start();
session_unset();
 header('Location: https://'.$_SERVER['HTTP_HOST']. '/socialmedia/index.php');
?>