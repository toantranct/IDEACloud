<?php
include '../config.php';
extract($_POST);


 echo $users;

//  Cú pháp lấy dữ liệu từ input : $name 
$target_dir = "../documents/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$file_name = $_FILES['fileToUpload']['name'];
$file_size = $_FILES['fileToUpload']['size'];
$file_tmp = $_FILES['fileToUpload']['tmp_name'];
$file_type = pathinfo($target_file,PATHINFO_EXTENSION);
$u_name =  ($_POST['u_name']);
$res2 = mysqli_query($conn, "select * from users where username = '$u_name'");
$row = mysqli_fetch_row($res2);
$d_name = ($_POST['d_name']);
$d_author = ($_POST['d_author']);
$d_date = ($_POST['d_date']);
$d_des = ($_POST['d_des']);
$Visi = ($_POST['dropdown1']);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
  echo "File already exists. ";
  $uploadOk = 0;
}

// Allow certain file formats
if (
  $imageFileType != "docx" && $imageFileType != "doc" && $imageFileType != "xls" && $imageFileType != "html" && $imageFileType != "htm"
  && $imageFileType != "xlsx" && $imageFileType != "ppt" && $imageFileType != "pptx" && $imageFileType != "pdf"
) {
  echo "Only doc/docx, xls/xlsx, ppt/pptx, pdf, html/htm files are allowed. ";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Your file was not uploaded.";
  // if everything is ok, try to upload file
} else {
  $sql = "INSERT INTO `docs`(`doc_name`, `doc_author`, `doc_date`, `description`, `visibility`, `type_file`, `type`, `filename`, `user_ID`) 
  VALUES ('$d_name','$d_author','$d_date','$d_des','$Visi','$file_type','0','$file_name','$row[0]')";
  $res = mysqli_query($conn, $sql);
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "Upload file thành công!";
  } else {
    echo "There was an error uploading your file.";
  }
}
?>