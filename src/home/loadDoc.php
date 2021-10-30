<?php
    include '../config.php';
    // Hiển thị return
     $parent = isset($_GET['parent']) ? $_GET['parent'] : '';
     $group_ID = isset($_GET['id'])? $_GET['id'] : '';
    

    // load return
    if ($group_ID != '')  {
        $sql = "select parent from doc_groups where group_ID = '$group_ID'";
        $rs = $conn->query($sql);
        $row =$rs->fetch_assoc();
        if (is_null($row['parent']))  $pr2 = '';
        else {
            $sql2 = "select parent from doc_groups where group_ID = '".$row['parent']."'";
            $rs = $conn->query($sql2) or null;
            $row2 =$rs->fetch_assoc();
            $pr2 = is_null($row2['parent']) ? '' : $row2['parent'];
        }
        
        echo '
        <!-- return  -->
        <div class="col-lg-3 col-xl-2">
            <div class="file-man-box">
                <a href="" class="file-close"><i class="mdi mdi-close-circle"></i></a>
                <div class="file-img-box" style="font-size: 2rem;">
                    <a href="../home/test.php?id='.$row['parent'].'&parent='.$pr2.'"><i class="mdi mdi-keyboard-return"></i></a>
                </div>
                <div class="file-man-title">
                    <h5 class="mb-0 text-overflow text-center">...</h5>
                    <p class="mb-0">&nbsp;</p>
                </div>
            </div>
        </div>

        ';

    }
    // load thư mục
    $sql = "select * from doc_groups";
    if ($group_ID == '')
            $sql  = $sql . ' where parent is null';
    else    $sql  = $sql . " where parent = '$group_ID'";
    // if ($group_ID != '') $sql = $sql. " and group_ID = '$group_ID'";
    //  echo $sql;
    $results = $conn->query($sql);
    if ($results->num_rows > 0) {
        while ($row = $results->fetch_assoc()) {
            echo ' 
            <div class="col-lg-3 col-xl-2">
            <div class="file-man-box">
                <a href="" class="file-close"><i class="mdi mdi-close-circle"></i></a>
                <div class="file-img-box" style="font-size: 4rem;">
                    <a href="../home/test.php?id='.$row['group_ID'].'&parent='.$row['parent'].'"><i class="mdi mdi-folder-multiple"></i></a>
                </div>
                <div class="file-man-title">
                    <h5 class="mb-0 text-overflow text-center">'.$row['group_name'].'</h5>
                    <p class="mb-0">&nbsp;</p>
                </div>
            </div>
        </div>';
        }
    }
    

    // load tệp
    $sql = "select DISTINCT doc_name, doc_author, doc_date, description, visibility, type_file, type, filename 
             from docs, group_detail, doc_groups
              where docs.doc_ID = group_detail.doc_ID and group_detail.group_ID = doc_groups.group_ID ";
    if ($parent == '')
            $sql  = $sql . ' and parent is null';
    else    $sql  = $sql . " and parent = '$parent'";
    if ($group_ID != '') $sql = $sql. " and doc_groups.group_ID = '$group_ID'";
    $sql = $sql. ' order by doc_name';
    $results = $conn->query($sql);
    //  echo $sql;
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
            if ($type_file == 'pptx') $type_file = 'ppt';
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

