<?php  
 $connect = mysqli_connect("localhost", "root", "", "testing");  
 $query = "SELECT * FROM tbl_employee ORDER BY id";  
 $result = mysqli_query($connect, $query);  
 ?>
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
    <title>Quản lý người dùng và tài liệu</title>
</head>

<body style="background: url('https://anhdepfree.com/wp-content/uploads/2018/10/Wallpaper-4K-dep-11.jpg') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;">
    <?php 
            if(isset($_SESSION['loginOK']))
            {
               header('location:login.php');
            }
     ?>
    <main>
        <!-- tiêu đề danh sách -->
        <div class="container">
            <div class="card border-0 shadow my-5">
                <div class="card-body p-5 col bg-info text-light text-center">
                    <h1>Danh sách người dùng/tài liệu</h1>
                </div>
                <div class="card-body p-5 bg-dark">
                    <!-- bắt đầu 2 tab -->
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-users-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-users" type="button" role="tab" aria-controls="nav-users"
                                aria-selected="true">Users</button>
                            <button class="nav-link" id="nav-docs-tab" data-bs-toggle="tab" data-bs-target="#nav-docs"
                                type="button" role="tab" aria-controls="nav-docs"
                                aria-selected="false">Documents</button>
                        </div>
                    </nav>
                    <!-- TAB người dùng -->
                    <div class="tab-pane fade show active" id="nav-users" role="tabpanel"
                        aria-labelledby="nav-users-tab">
                        <table class="table text-light">
                            <thead>
                                <tr>
                                    <th scope="col">Mã người dùng</th>
                                    <th scope="col">Tài khoản</th>
                                    <th scope="col">Mật khẩu</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Số di động</th>
                                    <th scope="col">Quyền hạn</th>
                                    <th scope="col">Cập nhật</th>
                                    <th scope="col">Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                            define('HOST','localhost');
                            define('USER','root');
                            const PASS  = '';
                            const DB    = 'ideacloud'; 
                            $conn = mysqli_connect(HOST,USER, PASS,DB);
                            if(!$conn){
                                die('Không thể kết nối');
                            }
                            $sql = "SELECT user_id,	username, password,	email, SDT, authorize FROM users
                            where status = 1 ORDER BY user_id";
                            $result = mysqli_query($conn,$sql);
                            if(mysqli_num_rows($result)>0){
                                while($row=mysqli_fetch_assoc($result)){
                                    echo '<tr>';
                                    echo '<th scope="row">'.$row['user_id'].'</th>';
                                    echo '<td>'.$row['username'].'</td>';
                                    echo '<td>'.$row['password'].'</td>';
                                    echo '<td>'.$row['email'].'</td>';
                                    echo '<td>'.$row['SDT'].'</td>';
                                    if ($row['authorize'] = 1){
                                        echo 'admin';
                                    }
                                    else echo 'Khách';
                                    echo '<td> <a href="UpdUser.php?manv='.$row['user_id'].'" ><i class="fas fa-user-edit" style="color:#3bc7ff;"></i></a></td>';
                                    echo '<td> <a href="DelUser.php?manv='.$row['user_id'].'"><i class="fas fa-user-times" style="color:#3bc7ff;"></i></a></td>';
                                    echo '</tr>';
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- TAB tài liệu -->
                    <div class="tab-pane fade" id="nav-docs" role="tabpanel" aria-labelledby="nav-docs-tab">
                        <table class="table text-light">
                            <thead>
                                <tr>
                                    <th scope="col">Mã tài liệu</th>
                                    <th scope="col">Tên tài liệu</th>
                                    <th scope="col">Tác giả</th>
                                    <th scope="col">Ngày sản xuất</th>
                                    <th scope="col">Mô tả</th>
                                    <th scope="col">Hiển thị với</th>
                                    <th scope="col">Tên tệp</th>
                                    <th scope="col">Người đưa lên</th>
                                    <th scope="col">Cập nhật</th>
                                    <th scope="col">Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                            $sql2 = "SELECT doc_ID, doc_name, doc_author, doc_date, description, visibility, filename, username FROM docs, users
                            where docs.user_id = users.user_id ORDER BY doc_ID";
                            $result2 = mysqli_query($conn,$sql2);
                            if(mysqli_num_rows($result2)>0){
                                while($row2=mysqli_fetch_assoc($result2)){
                                    echo '<tr>';
                                    echo '<th scope="row">'.$row2['doc_ID'].'</th>';
                                    echo '<td>'.$row2['doc_name'].'</td>';
                                    echo '<td>'.$row2['doc_author'].'</td>';
                                    echo '<td>'.$row2['doc_date'].'</td>';
                                    echo '<td>'.$row2['description'].'</td>';
                                    echo '<td>'.$row2['visibility'].'</td>';
                                    echo '<td>'.$row2['filename'].'</td>';
                                    echo '<td>'.$row2['username'].'</td>';
                                    echo '<td> <a href="UpdDoc.php?matl='.$row['doc_ID'].'" ><i class="fas fa-user-edit" style="color:#3bc7ff;"></i></a></td>';
                                    echo '<td> <a href="DelDoc.php?matl='.$row['doc_ID'].'"><i class="fas fa-user-times" style="color:#3bc7ff;"></i></a></td>';
                                    echo '</tr>';
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>