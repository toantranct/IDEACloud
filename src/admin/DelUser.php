<?php
 define('HOST','localhost');
 define('USER','root');
 const PASS  = '';
 const DB    = 'ideacloud'; 
 $conn = mysqli_connect(HOST,USER, PASS,DB);
 if(!$conn){
     die('Không thể kết nối'.$conn->connect_error);
 }
    $ID = $_GET['id'];
    $sql = "DELETE FROM users WHERE user_id='$ID'";
    $res = mysqli_query($conn, $sql);
    if($res==true)
   {    
       header('location:index.php');
   }else
   {
       echo "<script>alert('Xoá thất bại');</script>";
   }
?>