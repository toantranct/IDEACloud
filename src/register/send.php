<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;   
 use PHPMailer\PHPMailer\Exception;
    require 'phpmailer/Exception.php';
    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/SMTP.php';
    function sendEmail($recipient,$code){
        $mail = new PHPMailer(true);
        try{
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'nguyenhoangthe2001@gmail.com';
            $mail->Password = 'nmgcwjpfoogenyqe'; 
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587; 
            $mail->CharSet = 'UTF-8';

            $mail->setFrom('nguyenhoangthe2001@gmail.com', 'Hệ thống IdeaCloud');
            $mail->addReplyTo('nguyenhoangthe2001@gmail.com', 'Hệ thống IdeaCloud');

            $mail->addAddress($recipient);
            $mail->isHTML(true);
            $mail->Subject = '[localhost] Kích hoạt tài khoản'; 
            $mail->Body = 'Nhấp vào đây để kích hoạt: <a href="http://localhost:88/IDEACloud/src/register/activation.php?email='.$recipient.'&code='.$code.'">Nhấp vào đây</a>';
            if($mail->send()){
                echo '<script language="javascript">';
                echo 'alert("Email kích hoạt đã được gửi đi"); history.back();';
                echo '</script>';
            }

        }catch(Exception $e){
            echo "Lỗi ".$e->getMessage();
        }
    }
?>