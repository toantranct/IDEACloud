<?php
session_start();
unset($_SESSION["loginOK"]);
header("location:login/login.php");
?>