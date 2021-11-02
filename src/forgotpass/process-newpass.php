<?php
include('../config.php');
if(isset($_POST['btnsubmit'])){
    $pass1 = $_POST['password1'];
    $pass2  = $_POST['password2'];
    $email =$_POST['email'];
}
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
        $code = md5(uniqid(rand(), true));
        $sql_2 = "UPDATE users SET password='$pass_hash', code ='$code' WHERE email = '$email'";
        $result_2 = mysqli_query($conn,$sql_2);
        
        if($result_2 > 0){
            echo '<script language="javascript">';
            echo 'alert("Mật khẩu đã được đặt lại");window.location("../login/login.php");';
            echo '</script>';
        }
    }else{
        echo '<script language="javascript">';
        echo 'alert("Lỗi"); history.back();';
        echo '</script>';
    }
    ?>