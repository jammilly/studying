<?php
session_start();

$acesso = $_SESSION['acesso'] ?? "";
if ($acesso !== true) {
    header('location: login.php');
    exit();
}
?>
/*-------------------------------------------------------------------------------*/