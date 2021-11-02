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
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <script src="../Assets/js/modernizr.min.js"></script>

</head>

<body>

    <div class="container">
        <h2>Filterable List</h2>
        <p>Đm chỗ này thêm tên ngườI dùng muốn chia sẻ</p>
        <input class="form-control" id="myInput" type="text" placeholder="Search..">
        <input value="" data-role="tagsinput" class="form-control" id="input2" type="text">
        <br>
        <ul class="list-group" id="myList">
            <!-- <li class="list-group-item">First item</li>
            <li class="list-group-item">Second item</li>
            <li class="list-group-item">Third item</li>
            <li class="list-group-item">Fourth</li> -->
        </ul>


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



    <script>
        $(document).ready(function() {
            //Hiển thị div tìm tên người dùng
            $("#dropdown1").change(function() {
                if (this.value == '1')
                    $("#userShare").show();
                else
                    $('#userShare').hide();
            });


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

        });
    </script>



</body>

</html>