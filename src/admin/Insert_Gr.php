<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <title>Thêm nhóm tài liệu</title>
</head>

<body style="background: url('https://anhdepfree.com/wp-content/uploads/2018/10/Wallpaper-4K-dep-11.jpg') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;">
<?php 
    define('HOST','localhost');
    define('USER','root');
    const PASS  = '';
    const DB    = 'ideacloud'; 
    $conn = mysqli_connect(HOST,USER, PASS,DB);
    if(!$conn){
        die('Không thể kết nối');
    }
    ?>
<div class="container">
    <div class="card border-0 shadow my-5">
    <div class="row p-5 col bg-info text-light text-center">
      <h1>Insert Document's Group</h1>
    </div>
    <div class="row bg-dark">
    <div class="col-md-6 text-light text-center">
    <br><br>
    <h5>Insert Group Name:<br><br></h5>
    <h5>Insert Parent:<br><br></h5>  
    </div>
    <div class="col-md-6">
    <br><br>
    <form action="" method="POST" class="text-left text-light">
        <input type="text" name="name" placeholder="Enter Name"><br><br>
        <input type="number" name="parent" placeholder="0 if don't have parents" min="0"><br><br>
        <input type="submit" name="submit" value="Update" class="btn-info text-light">
        <br><br>
    </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<?php
if(isset($_POST['submit']))  
   {
    $Name = ($_POST['name']);
    $Parent = ($_POST['parent']);
    if($Parent=='0')
    {
        $sql = "INSERT INTO `doc_groups`(`group_name`, `parent`) VALUES ('$Name',null)";
        $res = mysqli_query($conn, $sql);
    }
    else
    {
        $sql = "INSERT INTO `doc_groups`(`group_name`, `parent`) VALUES ('$Name','$Parent')";
        $res = mysqli_query($conn, $sql);
    }
    
    if($res==true)
   {
       header('location:index.php');
   }else
   {
       echo"Sửa thất bại";
   }
   }
?>
