<?php
    include('send.php');
    if(isset($_POST['btnsubmit'])){
        $user  = $_POST['username'];
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
        $pass1 = $_POST['password1'];
        $pass2 = $_POST['password2'];
    }
    include('../config.php');
    $sql = "SELECT * FROM users WHERE username='$user' or email='$email' ";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        echo 'Email hoặc Tên tài khoản đã tồn tại';
    }else{
        $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
        $code = md5(uniqid(rand(), true));
        $sql_2 = "INSERT INTO users (username,fullname,email,sdt, password,code) VALUES ('$user','$fullname',
        '$email','$sdt','$pass_hash','$code')";
        $result_2 = mysqli_query($conn,$sql_2);

        if($result_2 >=1){
            sendEmail($email,$code);
        }
    }
?>