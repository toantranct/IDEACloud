<?php
    session_start();
    session_destroy();
    // if (isset($_SESSION['loginOK'])) unset($_SESSION['loginOK']);
    // if (isset($_SESSION['admin'])) unset($_SESSION['admin']);
    header("location: /login/login.php");
?>