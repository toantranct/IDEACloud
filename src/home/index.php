<!DOCTYPE html>
<html>
<?php
session_start();
if (!isset($_SESSION['loginOK'])) {
    header('location:../login/login.php');
}

include '../config.php';
$sql = "select * from users where username = '".$_SESSION['loginOK']."'";
$rs = $conn->query($sql);
if ($rs !== false && $rs->num_rows > 0 ){
    $dataUser = $rs->fetch_assoc();
}
?>

<head>

    <meta charset="utf-8" />
    <title>IDEA Cloud</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

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

    <?php
    include '../config.php';

    $sql = "select username from users";

    $rs = $conn->query($sql);

    if ($rs !== false && $rs->num_rows >  0) {
        echo "<script> var users = [];";
        while ($row = $rs->fetch_assoc()) {
            echo 'users.push(\'' . $row['username'] . '\');';
        }
    }
    $sql = "select group_id, group_name from doc_groups";
    $rs = $conn->query($sql);

    echo "var group = [];";

    if ($rs !== false && $rs->num_rows >  0) {

        while ($row = $rs->fetch_assoc()) {
            echo 'group.push({id: \'' . $row['group_id'] . '\', name : \'' . $row['group_name'] . '\'});';
        }
    }
    echo "</script>";
    ?>



    <!-- Begin page -->
    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">

            <div class="slimscroll-menu" id="remove-scroll">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <span>
                            <img src="../Assets/images/logo.png" alt="" height="22">
                        </span>
                        <i>
                            <img src="../Assets/images/logo_sm.png" alt="" height="28">
                        </i>
                    </a>
                </div>

                <!-- User box -->
                <div class="user-box">
                    <div class="user-img">
                        <img src="../Assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme"
                            class="rounded-circle img-fluid">
                    </div>
                    <h5><a href="#"><?php echo $dataUser["fullname"]; ?></a> </h5>
                    <p class="text-muted">
                        <?php
                            if ($dataUser["authorize"] == 1)
                                echo "Qu???n tr??? vi??n";
                            else 
                             echo "D??n quo??n";
                        ?>
                    </p>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">

                        <!--<li class="menu-title">Navigation</li>-->

                        <li>
                            <a href="index.php">
                                <i class="mdi mdi-account"></i> <span> T??i li???u c???a t??i</span>
                            </a>
                        </li>

                        <li>
                            <a href="index.php?type=1">
                                <i class="mdi mdi-account-multiple"></i> <span> ???????c chia s??? v???i t??i</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?type=2">
                                <i class="mdi mdi-folder-multiple"></i> <span> Nh??m t??i li???u</span>
                            </a>
                        </li>

                        <!-- <li class="menu-title">Tags</li> -->


                </div>
                <!-- Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            <!-- Top Bar Start -->
            <div class="topbar">

                <nav class="navbar-custom">

                    <ul class="list-unstyled topbar-right-menu float-right mb-0">

                        <li class="hide-phone app-search">
                            <form>
                                <input type="text" placeholder="T??m ki???m" class="form-control">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </li>


                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <img src="../Assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle"> <span
                                    class="ml-1"><?php echo $_SESSION['loginOK']; ?> <i
                                        class="mdi mdi-chevron-down"></i> </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="../logout.php" class="dropdown-item notify-item">
                                    <i class="fi-power"></i> <span>Logout</span>
                                </a>

                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left disable-btn">
                                <i class="dripicons-menu"></i>
                            </button>
                        </li>
                        <li>
                            <div class="page-title-box">
                                <h4 class="page-title">Qu???n l?? t??i li???u </h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">IDEA Cloud</a></li>
                                    <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                                    <li class="breadcrumb-item active">
                                        <?php
                                        $type = isset($_GET['type']) ? $_GET['type'] : 0;
                                        if ($type == 0)
                                            echo "T??i li???u c???a t??i";
                                        else 
                                             if ($type == 1)
                                            echo "???????c chia s??? v???i t??i";
                                        else
                                            echo "Nh??m t??i li???u"
                                        ?>
                                    </li>
                                </ol>
                            </div>
                        </li>

                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->



            <!-- Start Page content -->
            <div class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">

                                <form method="post" id="form-upload" enctype="multipart/form-data">

                                    <!-- modal tai tep -->

                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Th??m t??i li???u</h4>
                                                </div>
                                                <div class="modal-body p-4">
                                                    <input type="text" id="u_name" name="u_name"
                                                        value="<?php echo ($_SESSION["loginOK"]) ?>" hidden="hidden">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="field-1" class="control-label">T??n t??i
                                                                    li???u</label>
                                                                <input type="text" class="form-control" name="d_name"
                                                                    id="d_name" placeholder="Nh???p t??n t??i li???u">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="field-2" class="control-label">T??c
                                                                    gi???</label>
                                                                <input type="text" class="form-control" name="d_author"
                                                                    id="d_author" placeholder="Nh???p t??c gi???">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="field-3" class="control-label">Ng??y s???n
                                                                    xu???t</label>
                                                                <input type="date" class="form-control" name="d_date"
                                                                    id="d_date" placeholder="Nh???p ng??y s???n xu???t">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="d_des" class="control-label">M?? t???</label>
                                                                <input type="text" class="form-control" name="d_des"
                                                                    id="d_des" placeholder="Nh???p m?? t???">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="d_des" class="control-label">Hi???n th???
                                                                    v???i</label>
                                                                <select class="custom-select" name="dropdown1"
                                                                    id="dropdown1">
                                                                    <option value="0">Only Me</option>
                                                                    <option value="1">Member Only</option>
                                                                    <option value="2">Public</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row" id="userShare" style="display:none;">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="d_des" class="control-label">Ch???n ng?????i ???????c
                                                                    chia s???</label>
                                                                <input class="form-control" id="myInput" type="text"
                                                                    placeholder="Search...">
                                                                <input value="" data-role="tagsinput"
                                                                    class="form-control" id="input2" type="text">
                                                                <ul class="list-group" id="myList"></ul>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row" id="groupShare">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="d_des" class="control-label">Th??m v??o
                                                                    nh??m</label>
                                                                <input class="form-control" id="myInput1" type="text"
                                                                    placeholder="Search...">
                                                                <input value="" data-role="tagsinput"
                                                                    class="form-control" id="myInput2" type="text">
                                                                <ul class="list-group" id="myList1"></ul>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">

                                                                Ch???n file ????? t???i l??n:
                                                                <input type="file" name="fileToUpload"
                                                                    id="fileToUpload">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <span id="msg"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-info text-light waves-effect"
                                                        data-bs-dismiss="modal">????ng</button>
                                                    <button type="submit" id="btnUpload"
                                                        class="btn btn-info text-light waves-effect waves-light"
                                                        name="submit">T???i l??n</button>
                                                    <!-- data-bs-dismiss="modal" -->
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                    <!-- end modal upload -->
                                </form>

                                <!-- Button trigger modal -->

                                <button type="button"
                                    class="btn btn-custom btn-rounded w-md waves-effect waves-light pull-right"
                                    data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                        class=" mdi mdi-upload"></i>T???i t???p l??n</button>

                                <a href="../home/textEditor.php" target="_blank"><button type="button"
                                        class="btn btn-primary btn-rounded w-md waves-effect waves pull-right"><i
                                            class="mdi mdi-plus"></i>T???o t??i li???u m???i</button></a>


                                <h4 class="header-title m-b-30"><b>
                                        <?php
                                        $type = isset($_GET['type']) ? $_GET['type'] : 0;
                                        if ($type == 0)
                                            echo "T??i li???u c???a t??i";
                                        else 
                                             if ($type == 1)
                                            echo "???????c chia s??? v???i t??i";
                                        else
                                            echo "Nh??m t??i li???u"
                                        ?>
                                    </b></h4>

                                <div class="row">
                                    <?php include 'loadDocIndex.php' ?>
                                </div>


                                <!-- Button tai them -->
                                <!-- <div class="text-center mt-3">
                                    <button type="button" class="btn btn-outline-danger w-md waves-effect waves-light"><i class="mdi mdi-refresh"></i> T???i th??m</button>
                                </div> -->

                            </div>
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- container -->

            </div> <!-- content -->

            <footer class="footer text-right">
                2021 ?? IDEA Cloud. - H??? th???ng qu???n l?? t??i li???u tr???c tuy???n
            </footer>

        </div>


        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="../Assets/js/jquery.min.js"></script>
    <script src="../Assets/js/popper.min.js"></script>
    <script src="../Assets/js/bootstrap.min.js"></script>
    <script src="../Assets/js/metisMenu.min.js"></script>
    <script src="../Assets/js/waves.js"></script>
    <script src="../Assets/js/jquery.slimscroll.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Toastr js -->
    <script src="../Assets/plugins/jquery-toastr/jquery.toast.min.js" type="text/javascript"></script>
    <!-- <script src="../Assets/pages/jquery.toastr.js" type="text/javascript"></script>   -->


    <!-- Bootstrap tagsinput -->
    <script src="../Assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>

    <!-- App js -->
    <script src="../Assets/js/jquery.core.js"></script>
    <script src="../Assets/js/jquery.app.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

    <script>
    $(document).ready(function() {

        // X??? l?? t??m t??n ng?????i d??ng
        $(document).click(function(e) {
            if (!$(e.target).closest('#myInput').length) {
                for (i = 0; i < users.length; i++) {
                    $("#myList li").css('display', 'none');
                }

            }
            if (!$(e.target).closest('#myInput1').length) {
                for (i = 0; i < users.length; i++) {
                    $("#myList1 li").css('display', 'none');
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

        //$("#input2").tagsinput('items');
        // m???ng l??u th??ng tin ng?????i d??ng mu???n chia s???
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myList li").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
        // $("#form-upload").submit(function(e) {

        //Hi???n th??? div t??m t??n ng?????i d??ng
        $("#dropdown1").change(function() {
            if (this.value == '1')
                $("#userShare").show();
            else
                $('#userShare').hide();
        });



        // Th??m v??o nh??m
        if (group.length) {
            for (i = 0; i < group.length; i++) {
                $("#myList1").append('<li class="list-group-item" style="display:none;">' + group[i].name +
                    '</li>');
            }
        }


        $('#myList1 li').click(function(e) {
            $("#myInput1").val('');
            $('#myInput2').tagsinput('add', $(this).text());

        });

        //$("#input2").tagsinput('items');
        // m???ng l??u th??ng tin ng?????i d??ng mu???n chia s???
        $("#myInput1").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myList1 li").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });


        // X??? l?? t???i t???p l??n
        $("#btnUpload").click(function(e) {
            e.preventDefault();
            var d_name = $("#d_name").val();
            var d_author = $("#d_author").val();
            var d_date = $("#d_date").val();
            var d_des = $("#d_des").val();
            var visi = $('#dropdown1 option:selected').val();
            var file = $("#fileToUpload").val();
            if (d_name == "" || d_author == "" || d_date == "" || visi == "") {
                $("#msg").fadeIn().html('<b class="text-danger"> Vui l??ng nh???p ?????y ????? th??ng tin</b>');
                setTimeout(function() {
                    $("#msg").fadeOut();
                }, 4000);
            } else if (file == "") {
                $("#msg").fadeIn().html('<b class="text-danger">Vui l??ng t???i t???p l??n</b>');
                setTimeout(function() {
                    $("#msg").fadeOut();
                }, 4000);
            } else {
                var dt = new FormData($('form')[1]);
                if (visi == 1) {
                    var tmp = [];
                    tmp = $("#input2").tagsinput('items');
                    for (var i = 0; i < tmp.length; i++) {
                        dt.append('share[]', tmp[i]);
                    }
                }
                tmp = [];
                tmp = $("#myInput2").tagsinput('items');
                for (var i = 0; i < tmp.length; i++)
                    for (var j = 0; j < group.length; j++)
                        if (tmp[i] == group[i].name)
                            dt.append('group[]', group[i].id);
                $.ajax({
                    url: 'upload.php',
                    type: 'post',
                    data: dt,
                    processData: false,
                    contentType: false,
                    success: function(traVe) {
                        $.toast({
                            heading: 'Th??ng b??o!',
                            text: traVe,
                            position: 'top-right',
                            loaderBg: '#3b98b5',
                            icon: 'info',
                            hideAfter: 3000,
                            stack: 1
                        });
                        $('#staticBackdrop').modal('hide');
                    }

                })
            }


        });
    })
    </script>

</body>

</html>