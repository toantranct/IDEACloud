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
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>IDEA Cloud - Trình soạn thảo online</h5>
            </div>
            <div class="card-body">
                <div class="container">

                    <div class="row">
                        <div class="col-12">
                            <div class="p-20">
                                <form class="form-horizontal" role="form">

                                    <div class="form-group row">
                                        <label class="col-2 col-form-label">Tên tài liệu</label>
                                        <div class="col-7">
                                            <input type="text" class="form-control" placeholder="VD: Tài liệu RL">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-2 col-form-label">Mô tả</label>
                                        <div class="col-7">
                                            <input type="text" class="form-control" placeholder="...">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-2 col-form-label">Giới hạn người xem</label>
                                        <div class="col-7">
                                            <select class="form-control">
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

                    </div>
                    <!-- end row -->





                    <!-- text Editor -->
                    <form method="post" id="get-data">
                        <textarea id="open-source-plugins"> </textarea>
                        <input type="submit" id="btnDoc" value="Lưu về dạng doc">
                        <input type="submit" id="btnHtml" value="Lưu về dưới dạng html">

                    </form>
                    <div id="data"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery  -->
    <script src="../Assets/js/jquery.min.js"></script>
    <script src="../Assets/js/popper.min.js"></script>
    <script src="../Assets/js/bootstrap.min.js"></script>
    <script src="../Assets/js/metisMenu.min.js"></script>
    <script src="../Assets/js/waves.js"></script>
    <script src="../Assets/js/jquery.slimscroll.js"></script>

    <!-- App js -->
    <script src="../Assets/js/jquery.core.js"></script>
    <script src="../Assets/js/jquery.app.js"></script>

    <script src="../Assets/js/textEditor.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.6/tinymce.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.6/jquery.tinymce.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#get-data').submit(function(e) {
                var conntent = tinymce.get("open-source-plugins").getContent();
                $('#data').html(conntent);
                console.log(conntent);

                return false;
            })
        })
    </script>


</body>

</html>