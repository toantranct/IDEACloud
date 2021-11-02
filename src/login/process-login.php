<?php
  session_start();
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password_raw = $_POST['password'];
    }
    include('../config.php');
    $sql="select * from users where username='$username'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        $password_hash=$row['password'];
        $status=$row['status'];
        $level=$row['authorize'];
        //ktra mk và kích hoạt
        if(password_verify($password_raw,$password_hash) && $status==1){ 
          if ($level == 1) $_SESSION['admin'] = true;
          $_SESSION['loginOK'] = $username;
          header('Location:../home/index.php');
      }
      else 
      if (password_verify($password_raw,$password_hash) && $status==0){
          $_SESSION['loginOK'] = $username;
          echo '<script language="javascript">';
          echo 'alert("Tài Khoản chưa được kích hoạt"); history.back();';
          echo '</script>';
      }
          else{
            echo '<script language="javascript">';
            echo 'alert("Bạn đã nhập sai mật khẩu"); history.back();';
            echo '</script>';
        }

      } else{
        echo '<script language="javascript">';
        echo 'alert("Bạn đã nhập sai tài khoản"); history.back();';
        echo '</script>';
        }

?>