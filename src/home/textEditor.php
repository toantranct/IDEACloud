<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    if (!isset($_SESSION['loginOK'])) {
        header('location:../login/login.php');
    }
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo tài liệu mới</title>
    <link rel="stylesheet" href="../Assets/css/textEditor.css">

    <!-- App favicon -->
    <link rel="shortcut icon" href="../Assets/images/favicon.ico">

    <!-- Toastr css -->
    <link href="../Assets/plugins/jquery-toastr/jquery.toast.min.css" rel="stylesheet" />

    <!-- Plugins css-->
    <link href="../Assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />

    <!-- App css -->
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../Assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="../Assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="../Assets/css/style.css" rel="stylesheet" type="text/css" />

    <!-- TinyEditor -->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

</head>

<body>
    <?php
    include '../config.php';

    $sql = "select username from users";

    $rs = $conn->query($sql);

    if ($rs->num_rows >  0) {
        echo "<script> var users = [];";
        while ($row = $rs->fetch_assoc()) {

            echo 'users.push(\'' . $row['username'] . '\');';
        }
        echo "</script>";
    }

    ?>
    <!-- Form thông tin -->
    <div class="container-fluid" style="height: 100vh;">
        <div class="card">
            <div class="card-header">
                <h5>IDEA Cloud - Trình soạn thảo online</h5>
            </div>
            <form method="post" id="get-data" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="container">

                        <div class="row">
                            <div class="col-12">
                                <div class="p-20">
                                    <form class="form-horizontal" role="form">
                                        <input type="text" id="u_name" name="u_name"
                                            value="<?php echo ($_SESSION["loginOK"]) ?>" hidden="hidden">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Tên tài liệu</label>
                                            <div class="col-7">
                                                <input type="text" name="d_name" id="d_name" class="form-control"
                                                    placeholder="VD: Tài liệu RL">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Mô tả</label>
                                            <div class="col-7">
                                                <input type="text" name="d_des" id="d_des" class="form-control"
                                                    placeholder="...">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Chế độ hiển thị</label>
                                            <div class="col-7">
                                                <select class="form-control" name="dropdown1" id="dropdown1">
                                                    <option value="0">Chỉ mình tôi</option>
                                                    <option value="1">Người được chỉ định</option>
                                                    <option value="2">Công khai</option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="form-group row" id="userShare" style="display:none;">
                                            <label for="d_des" class="col-2 col-form-label">Chọn người được chia
                                                sẻ</label>
                                            <div class="col-7">
                                                <input class="form-control" id="myInput" type="text"
                                                    placeholder="Search...">
                                                <input value="" data-role="tagsinput" class="form-control" id="input2"
                                                    type="text">
                                                <ul class="list-group" id="myList"></ul>

                                            </div>

                                        </div>

                                </div>

            </form>
        </div>
    </div>


    <div class="col-md-12">
        <div class="form-group row">
            <button type="submit" id="btnDoc"
                class="form-control form-control-sm btn btn-primary btn-sm pb-2 text-center col-md-2" value="1">Lưu về
                dạng DOC</button>
            <button type="submit" id="btnHtml"
                class="form-control form-control-sm btn btn-primary btn-sm pb-2 text-center col-md-2" value="2">Lưu về
                dưới dạng HTML</button>
        </div>

        <label class="col-md-12" id="msg"></label>
        <div class="form-group row">
            <textarea id="open-source-plugins" class="form-group-row"> </textarea>
        </div>

    </div>






    </div>
    <!-- end row -->





    <!-- text Editor -->

    <div id="data"></div>
    </div>
    </div>

    </form>
    </div>
    </div>

    <!-- jQuery  -->
    <script src="../Assets/js/jquery.min.js"></script>
    <script src="../Assets/js/popper.min.js"></script>
    <script src="../Assets/js/bootstrap.min.js"></script>
    <script src="../Assets/js/metisMenu.min.js"></script>
    <script src="../Assets/js/waves.js"></script>
    <script src="../Assets/js/jquery.slimscroll.js"></script>

    <!-- Toastr js -->
    <script src="../Assets/plugins/jquery-toastr/jquery.toast.min.js" type="text/javascript"></script>
    <!-- Bootstrap tagsinput -->
    <script src="../Assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>


    <!-- App js -->
    <script src="../Assets/js/jquery.core.js"></script>
    <script src="../Assets/js/jquery.app.js"></script>

    <script src="../Assets/js/textEditor.js"></script>


    <script>
    $(document).ready(function() {
        // show div
        //Hiển thị div tìm tên người dùng
        $("#dropdown1").change(function() {
            if (this.value == '1')
                $("#userShare").show();
            else
                $('#userShare').hide();
        });

        // Member u want share
        $(document).click(function() {
            if (!$(event.target).closest('#myInput').length) {
                for (i = 0; i < users.length; i++) {
                    $("#myList li").css('display', 'none');
                }

            }
        });

        for (i = 0; i < users.length; i++) {
            $("#myList").append('<li class="list-group-item" style="display:none;">' + users[i] + '</li>');
        }

        $('#myList li').click(function(e) {
            $("#myInput").val('');
            $('#input2').tagsinput('add', $(this).text());

        });
        // console.log($("#input2").tagsinput('items'));
        // mảng lưu thông tin người dùng
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myList li").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });


        var idBtn = '';
        $('button[type="submit"]').click(function(e) {
            if (e.target) idBtn = e.target.id;
        });
        $('#get-data').submit(function(e) {
            e.preventDefault();
            // console.log(idBtn);
            var conntent = tinymce.get("open-source-plugins").getContent();
            // $('#data').html(conntent);
            //console.log(conntent);
            var d_name = $("#d_name").val();
            var d_date = new Date().toISOString().split('T')[0];
            var d_des = $("#d_des").val();
            var visi = $('#dropdown1 option:selected').val();
            if (d_name == "" || d_des == "" || visi == "") {
                $("#msg").fadeIn().html('<b class="text-danger"> Vui lòng nhập đầy đủ thông tin</b>');
                setTimeout(function() {
                    $("#msg").fadeOut();
                }, 2000);
            } else {
                var dt = new FormData($('form')[0]);
                dt.append("visi", visi);
                dt.append("date", d_date);
                dt.append("type", idBtn);
                dt.append("conntent", conntent);
                if (visi == 1) {
                    var share = [];
                    share = $("#input2").tagsinput('items');
                    for (i = 0; i < share.length; i++)
                        dt.append("users[]", share[i]);
                }
                $.ajax({
                    url: '../Documents/saveFile.php',
                    type: 'post',
                    data: dt,
                    processData: false,
                    contentType: false,
                    success: function(traVe) {
                        $.toast({
                            heading: 'Thông báo!',
                            text: traVe,
                            position: 'top-right',
                            loaderBg: '#3b98b5',
                            icon: 'info',
                            hideAfter: 3000,
                            stack: 1
                        });

                    }

                })
            }


        });
    })
    </script>


</body>

</html>