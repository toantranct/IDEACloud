<?php
session_start();
 include '../config.php';
 if(isset($_POST['submit']))
 {
  $username = $_POST['username'];
  $password = ($_POST['password']);
  $sql = "SELECT * FROM users WHERE username='$username' and password ='$password'";
  $res = mysqli_query($conn, $sql) ; 

  if($res->num_rows>0) {
    $_SESSION['loginOK'] = $username;
    echo "Đăng nhập thành công!";
    header('location:../home/index.php');
    } else {
        echo "Tên đăng nhập hoặc mật khẩu không đúng!";
        header('location:login.php');
    }
 } 
?>