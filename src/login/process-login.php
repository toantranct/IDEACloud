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
        if(password_verify($password_raw,$password_hash) && $status==1 && $level==0){
          $_SESSION['loginOK'] = $username;
          header('Location:../home/index.php');
      }
      if(password_verify($password_raw,$password_hash) && $status==1 && $level==1){
        $_SESSION['loginOK'] = $username;
        header('Location:../admin/index.php');
      }
      if (password_verify($password_raw,$password_hash) && $status==0){
          $_SESSION['loginOK'] = $username;
         echo "Tài khoản chưa được kích hoạt";
      }
          else{
            echo 'Mật khẩu không đúng';
        }

      } else{
            echo "Tài khoản không đúng";
        }

?>