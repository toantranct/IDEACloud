<?php
$target_dir = "../Documents/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
  echo "File already exists. ";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "docx" && $imageFileType != "doc" && $imageFileType != "xls" && $imageFileType != "html"
&& $imageFileType != "xlsx" && $imageFileType != "ppt" && $imageFileType != "pptx" && $imageFileType != "pdf" ) {
  echo "Only doc/docx, xls/xlsx, ppt/pptx, pdf, html files are allowed. ";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    header('location:test.php');
  } else {
    echo "There was an error uploading your file.";
  }
}
?>