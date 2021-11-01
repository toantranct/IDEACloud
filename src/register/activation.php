<?php
include('../config.php');
if(isset($_GET['email'])){
    $email = $_GET['email'];
    $code  = $_GET['code'];
}
    $sql = "SELECT * FROM users WHERE email='$email' or code='$code'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        $sql_2 = "UPDATE users SET status = 1, authorize = 0 WHERE email = '$email'";
        $result_2 = mysqli_query($conn,$sql_2);

        if($result_2 > 0){
            echo 'Tài khoản đã được kích hoạt';
        }
    }else{
       echo 'Không thể kích hoạt.';
    }
    ?>