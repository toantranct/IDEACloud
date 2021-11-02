<?php
include '../config.php';
extract($_POST);
// echo $d_name;
// echo $d_des;
// echo $date;
// echo $visi;
// echo $type; // tải về kiểu html hay doc
// echo $conntent
// Load library 
require_once 'html_doc.php';

// Initialize class 
$htd = new HTML_TO_DOC();

$u_name =  ($_POST['u_name']);
$res2 = mysqli_query($conn, "select * from users where username = '$u_name'");
$row = mysqli_fetch_row($res2);

if ($type=='btnHtml'){
$myfile = fopen($d_name.".html", "w");
fwrite($myfile, $conntent);
fclose($myfile);
$sql = "INSERT INTO `docs`(`doc_name`, `doc_author`, `doc_date`, `description`, `visibility`, `type_file`, `type`, `filename`, `user_ID`) 
VALUES ('$d_name','$row[1]','$date','$d_des','$visi','html','1','$d_name.html','$row[0]')";
$res = mysqli_query($conn, $sql);
echo ('Lưu thành công dưới dạng html!');
}
else {
$htd->createDoc($conntent, $d_name);
$sql = "INSERT INTO `docs`(`doc_name`, `doc_author`, `doc_date`, `description`, `visibility`, `type_file`, `type`, `filename`, `user_ID`) 
VALUES ('$d_name','$row[1]','$date','$d_des','$visi','docx','1','$d_name.docx','$row[0]')";
$res = mysqli_query($conn, $sql);
echo ('Lưu thành công dưới dạng doc!');
}

// Nội dung file:
?>