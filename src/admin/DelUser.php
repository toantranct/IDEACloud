<?php
 define('HOST','localhost');
 define('USER','root');
 const PASS  = '';
 const DB    = 'tlu_phonebook'; 
 $conn = mysqli_connect(HOST,USER, PASS,DB);
 if(!$conn){
     die('Không thể kết nối');
 }
 if(isset($_SESSION['manv']))
 {
     echo $_SESSION['manv']; 
     unset($_SESSION['manv']); 
 }
    $manv = $_GET['manv'];
    $sql = "DELETE FROM db_employees WHERE emp_id=$manv";
    $res = mysqli_query($conn, $sql) or die(mysqli_error()) ;
    if($res==true)
   {
       header('location:MnUserDoc.php');
   }else
   {
       echo"Xoá thất bại";
   }
?>