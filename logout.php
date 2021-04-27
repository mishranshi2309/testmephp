<?php
session_start();
if(isset($_SESSION['username'])){
    session_destroy();
   // unset($_COOKIE['username']);
   // unset($_COOKIE['password']);
   setcookie('username',false);
   setcookie('password',false);
    header('location:login.php');


}
?>