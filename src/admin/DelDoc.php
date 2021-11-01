<?php
 define('HOST','localhost');
 define('USER','root');
 const PASS  = '';
 const DB    = 'ideacloud'; 
 $conn = mysqli_connect(HOST,USER, PASS,DB);
 if(!$conn){
     die('Không thể kết nối'.$conn->connect_error);
 }
    $ID = $_GET['iddoc'];
    $sql = "DELETE FROM docs WHERE doc_id='$ID'";
    $res = mysqli_query($conn, $sql);
    if($res==true)
   {    
       header('location:MnUserDoc.php');
   }else
   {
       echo "<script>alert('Xoá thất bại');</script>";
   }
?>