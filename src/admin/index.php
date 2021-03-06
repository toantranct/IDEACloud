<!DOCTYPE html>
<?php 
// nếu đã đăng nhập và là admin
// sql kiểm tra admin
            session_start();
            if(!isset($_SESSION['loginOK']) || !isset($_SESSION['admin']))
            {
               header('location:../login/login.php');
            }
     ?>
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
    <main>
        <!-- tiêu đề danh sách -->
        <div class="container">
            <div class="card border-0 shadow my-5">
                <div class="card-body p-5 col bg-info text-light text-center">
                    <h1>Danh sách người dùng/tài liệu/nhóm tài liệu</h1>
                </div>
                <div class="card-body p-5 bg-dark">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-info text-light" type="button"><a class="text-light" href="Insert_Gr.php">Thêm nhóm tài liệu</a></button>
                </div>
                    <!-- bắt đầu 3 tab -->
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-users-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-users" type="button" role="tab" aria-controls="nav-users"
                                aria-selected="true">Người dùng</button>
                            <button class="nav-link" id="nav-docs-tab" data-bs-toggle="tab" data-bs-target="#nav-docs"
                                type="button" role="tab" aria-controls="nav-docs" aria-selected="false">Tài
                                liệu</button>
                            <button class="nav-link" id="nav-grs-tab" data-bs-toggle="tab" data-bs-target="#nav-grs"
                                type="button" role="tab" aria-controls="nav-grs" aria-selected="false">Nhóm tài
                                liệu</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <!-- TAB người dùng -->
                        <div class="tab-pane fade show active" id="nav-users" role="tabpanel"
                            aria-labelledby="nav-users-tab">
                            <table class="table text-light">
                                <thead>
                                    <tr>
                                        <th scope="col">Tài khoản</th>
                                        <th scope="col">Tên người dùng</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Số di động</th>
                                        <th scope="col">Quyền hạn</th>
                                        <th scope="col">Cập nhật</th>
                                        <th scope="col">Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                            include '../config.php';
                            $sql = "SELECT user_id, fullname, username, password, email, SDT, authorize FROM users
                            where status = 1 ORDER BY user_id";
                            $result = mysqli_query($conn,$sql);
                            if(mysqli_num_rows($result)>0){
                                while($row=mysqli_fetch_assoc($result)){
                                    echo '<tr>';
                                    echo '<th scope="row">'.$row['username'].'</th>';
                                    echo '<td>'.$row['fullname'].'</td>';
                                    echo '<td>'.$row['email'].'</td>';
                                    echo '<td>'.$row['SDT'].'</td>';
                                    if ($row['authorize'] == 1){
                                        echo '<td>'.'<h5>Admin</h5>'.'</td>';
                                    }
                                    else echo '<td>'.'<h5>Khách</h5>'.'</td>';
                                    echo '<td> <a href="UpdUser.php?usern='.$row['username'].'" ><i class="fas fa-user-edit" style="color:#3bc7ff;"></i></a></td>';
                                    echo '<td> <a href="DelUser.php?id='.$row['user_id'].'"><i class="fas fa-user-times" style="color:#3bc7ff;"></i></a></td>';
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
                            $sql2 = "SELECT doc_ID, doc_name, doc_author, doc_date, description, visibility, filename, fullname FROM docs, users
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
                                    if ($row2['visibility'] == 0){
                                        echo '<td>'.'<h6>Public</h6>'.'</td>';
                                    }
                                    else if ($row2['visibility'] == 1){
                                    echo '<td>'.'<h6>Only Me</h6>'.'</td>';
                                    }
                                    else echo '<td>'.'<h6>Member Only</h6>'.'</td>';
                                    echo '<td>'.$row2['filename'].'</td>';
                                    echo '<td>'.$row2['fullname'].'</td>';
                                    echo '<td> <a href="UpdDoc.php?iddoc='.$row2['doc_ID'].'" ><i class="far fa-edit" style="color:#3bc7ff"></i></a></td>';
                                    echo '<td> <a href="DelDoc.php?iddoc='.$row2['doc_ID'].'"><i class="far fa-trash-alt" style="color:#3bc7ff"></i></a></td>';
                                    echo '</tr>';
                                }
                            }
                            ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- TAB nhóm tài liệu -->
                        <div class="tab-pane fade" id="nav-grs" role="tabpanel" aria-labelledby="nav-grs-tab">
                            <table class="table text-light">
                                <thead>
                                    <tr>
                                        <th scope="col">Mã nhóm tài liệu</th>
                                        <th scope="col">Tên nhóm tài liệu</th>
                                        <th scope="col">Cha</th>
                                        <th scope="col">Sửa nhóm</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                            $sql3 = "SELECT group_id, group_name, parent FROM doc_groups
                            ORDER BY group_id";
                            $result3 = mysqli_query($conn,$sql3);
                            if(mysqli_num_rows($result3)>0){
                                while($row3=mysqli_fetch_assoc($result3)){
                                    echo '<tr>';
                                    echo '<th scope="row">'.$row3['group_id'].'</th>';
                                    echo '<td>'.$row3['group_name'].'</td>';
                                    if ($row3['parent'] == null){
                                        echo '<td>'.'<h6>Không</h6>'.'</td>';
                                    }
                                    else{
                                    // $sql31 = "SELECT group_name FROM doc_groups
                                    // where parent = '$row3["parent"]'";
                                    echo '<td>'.'<h6>'.$row3['parent'].'</h6>'.'</td>';
                                    }
                                    echo '<td> <a href="Upd_Gr.php?idgr='.$row3['group_id'].'"><i class="far fa-edit" style="color:#3bc7ff"></i></a></td>';
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
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>