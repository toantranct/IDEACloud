<?php
  if(isset($_POST['submit'])){
    $user  = $_POST['username'];
    $email = $_POST['email'];
}
include('send.php');
include('../config.php');
$sql = "SELECT * FROM users WHERE username='$user' or email='$email' ";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) == 0){
        echo '<script language="javascript">';
            echo 'alert("Email hoặc tên tài khoản không tồn tại"); history.back();';
            echo '</script>';
    }else{
        $code = md5(uniqid(rand(), true));
        sendEmail($email,$code);
    }
?>