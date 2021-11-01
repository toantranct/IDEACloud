<!DOCTYPE html>
<html lang="en">

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

    <!-- App css -->
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../Assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="../Assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="../Assets/css/style.css" rel="stylesheet" type="text/css" />
    <!-- TinyEditor -->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

</head>

<body>
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

                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Tên tài liệu</label>
                                            <div class="col-7">
                                                <input type="text" name = "d_name" id="d_name" class="form-control" placeholder="VD: Tài liệu RL">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Mô tả</label>
                                            <div class="col-7">
                                                <input type="text" name ="d_des" id="d_des" class="form-control" placeholder="...">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Giới hạn người xem</label>
                                            <div class="col-7">
                                                <select class="form-control" name = "dropdown1" id="dropdown1">
                                                    <option value="0">Chỉ mình tôi</option>
                                                    <option value="1">Người được chỉ định</option>
                                                    <option value="2">Công khai</option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Chọn những người bạn muốn chia sẻ</label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" placeholder="username">
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group row">
                                    <button type="submit" id="btnDoc" class="form-control form-control-sm btn btn-primary btn-sm pb-2 text-center col-md-2" value="1">Lưu về dạng DOC</button>
                                    <button type="submit" id="btnHtml" class="form-control form-control-sm btn btn-primary btn-sm pb-2 text-center col-md-2" value="2">Lưu về dưới dạng HTML</button>
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

    <!-- App js -->
    <script src="../Assets/js/jquery.core.js"></script>
    <script src="../Assets/js/jquery.app.js"></script>

    <script src="../Assets/js/textEditor.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.6/tinymce.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.6/jquery.tinymce.min.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->


    <script>
        $(document).ready(function() {
            var idBtn = '';
            $('button[type="submit"]').click(function(e) {
                    if (e.target) idBtn = e.target.id;
                });
            $('#get-data').submit(function(e) {
                e.preventDefault();
                 console.log(idBtn);
                var conntent = tinymce.get("open-source-plugins").getContent();
                $('#data').html(conntent);
                //console.log(conntent);
                var d_name = $("#d_name").val();
                var d_date = new Date();
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
                    $.ajax({
                        url: 'saveFile.php',
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