<?php
session_start();

//session_destroy();
unset($_SESSION['acesso']);
header('location:login.php');
?>