<?php
    include '../config.php';
    $sql = "select * from docs";
    $results = $conn->query($sql);
    if ($results->num_rows > 0) {
        while($row = $results->fetch_assoc()){

            $file_name = $row['filename'];
            $type_file = $row['type_file'];  
            $date = $row['doc_date'];
            if ($row['visibility'] == 0)
                $visibility = 'Chỉ mình tôi';
            else if ($row['visibility'] == 1) 
                $visibility = 'Thành viên được chỉ định';
            else $visibility ='Công khai';
            if ($row['type'] == 0) 
                $type ='Tải lên';
            else 
                $type = 'Được tạo';
            if ($type_file == 'docx') $type_file = 'doc';
            if ($type_file == 'xlsx') $type_file = 'xls';
        echo '
        <div class="col-lg-3 col-xl-2">
                                    <div class="file-man-box">
                                        <a class="file-info" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <i class="mdi mdi-information"></i>

                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left dropdown-menu-animated dropdown-lg">

                                            <!-- item-->
                                            <div class="dropdown-item noti-title">
                                                <h5 class="m-0"><span class="float-right"><a href="" class="text-dark"></a> </span>Thông tin tài liệu</h5>
                                            </div>

                                            <div class="slimscroll" style="max-height: 300px;">
                                                <!-- item-->
                                                <p class="dropdown-item notify-item">Tên file: '.$file_name.' </p>
                                                <p class="dropdown-item notify-item">kích thước: 13.2KB </p>
                                                <p class="dropdown-item notify-item">Loại file: '.$type .'</p>
                                                <p class="dropdown-item notify-item ">Ngày tải lên: '.$date .'</p>
                                                <p class="dropdown-item notify-item ">Thuộc tính: '.$visibility.'</p>


                                            </div>
                                        </div>

                                        <a href="" class="file-close"><i class="mdi mdi-close-circle"></i></a>
                                        <div class="file-img-box">
                                            <img src="../Assets/images/file_icons/'.$type_file.'.svg" alt="icon">
                                        </div>
                                        <a href="#" class="file-download"><i class="mdi mdi-download"></i> </a>
                                        <div class="file-man-title">
                                            <h5 class="mb-0 text-overflow">'.$file_name.'</h5>
                                            <p class="mb-0"><small>568.8 kb</small></p>
                                        </div>
                                    </div>
                                </div>';
        
        }
    }
?>

