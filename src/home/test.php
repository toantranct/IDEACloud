<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>IDEA Cloud</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="../Assets/images/favicon.ico">

    <!-- App css -->
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../Assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="../Assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="../Assets/css/style.css" rel="stylesheet" type="text/css" />

    <script src="../Assets/js/modernizr.min.js"></script>

</head>


<body>

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
                        <img src="../Assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                    </div>
                    <h5><a href="#">Trần Quốc Toản</a> </h5>
                    <p class="text-muted">Admin</p>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">

                        <!--<li class="menu-title">Navigation</li>-->

                        <li>
                            <a href="index.html">
                                <i class="mdi mdi-account"></i> <span> Tài liệu của tôi</span>
                            </a>
                        </li>

                        <li>
                            <a href="index.html">
                                <i class="mdi mdi-account-multiple"></i> <span> Được chia sẻ với tôi</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.html">
                                <i class="mdi mdi-folder-multiple"></i> <span> Nhóm tài liệu</span>
                            </a>
                        </li>

                        <li class="menu-title">Tags</li>


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
                                <input type="text" placeholder="Tìm kiếm" class="form-control">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </li>



                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fi-bell noti-icon"></i>
                                <span class="badge badge-danger badge-pill noti-icon-badge">4</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Notification</h5>
                                </div>

                                <div class="slimscroll" style="max-height: 230px;">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                                        <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-danger"><i class="mdi mdi-heart"></i></div>
                                        <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">3 days ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning"><i class="mdi mdi-comment-account-outline"></i></div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-purple"><i class="mdi mdi-account-plus"></i></div>
                                        <p class="notify-details">New user registered.<small class="text-muted">7 days ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-custom"><i class="mdi mdi-heart"></i></div>
                                        <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">13 days ago</small></p>
                                    </a>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                    View all <i class="fi-arrow-right"></i>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fi-speech-bubble noti-icon"></i>
                                <span class="badge badge-custom badge-pill noti-icon-badge">6</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Chat</h5>
                                </div>

                                <div class="slimscroll" style="max-height: 230px;">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="../Assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Cristina Pride</p>
                                        <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="../Assets/images/users/avatar-3.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Sam Garret</p>
                                        <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="../Assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Karen Robinson</p>
                                        <p class="text-muted font-13 mb-0 user-msg">Wow that's great</p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="../Assets/images/users/avatar-5.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Sherry Marshall</p>
                                        <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="../Assets/images/users/avatar-6.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Shawn Millard</p>
                                        <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
                                    </a>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                    View all <i class="fi-arrow-right"></i>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="../Assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle"> <span class="ml-1">Maxine K <i class="mdi mdi-chevron-down"></i> </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fi-head"></i> <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fi-cog"></i> <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fi-help"></i> <span>Support</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fi-lock"></i> <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
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
                                <h4 class="page-title">Quản lí tài liệu </h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">IDEA Cloud</a></li>
                                    <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                                    <li class="breadcrumb-item active">Tài liệu của tôi</li>
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

                                <!-- modal tai tep -->

                                <div id="upload-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <div class="modal-body">
                                                <h2 class="text-uppercase text-center m-b-30">
                                                    <a href="index.html" class="text-success">
                                                        <span><img src="assets/images/logo.png" alt="" height="28"></span>
                                                    </a>
                                                </h2>


                                                <form class="form-horizontal" action="#">

                                                    <div class="form-group m-b-25">
                                                        <div class="col-12">
                                                            <label for="username">Name</label>
                                                            <input class="form-control" type="email" id="username" required="" placeholder="Michael Zenaty">
                                                        </div>
                                                    </div>

                                                    <div class="form-group m-b-25">
                                                        <div class="col-12">
                                                            <label for="emailaddress">Email address</label>
                                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="john@deo.com">
                                                        </div>
                                                    </div>

                                                    <div class="form-group m-b-25">
                                                        <div class="col-12">
                                                            <label for="password">Password</label>
                                                            <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                                                        </div>
                                                    </div>

                                                    <div class="form-group m-b-20">
                                                        <div class="col-12">
                                                            <div class="checkbox checkbox-custom">
                                                                <input id="checkbox11" type="checkbox" checked>
                                                                <label for="checkbox11">
                                                                    I accept <a href="#">Terms and Conditions</a>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group account-btn text-center m-t-10">
                                                        <div class="col-12">
                                                            <button class="btn w-lg btn-rounded btn-primary waves-effect waves-light" type="submit">Sign Up Free</button>
                                                        </div>
                                                    </div>

                                                </form>


                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                <!-- end modal upload -->
                                <button type="button" class="btn btn-custom btn-rounded w-md waves-effect waves-light pull-right" data-toggle="modal" data-target="#upload-modal"><i class=" mdi mdi-upload"></i>Tải tệp lên</button>


                                <a href="../home/textEditor.php" target="_blank"><button type="button" class="btn btn-primary btn-rounded w-md waves-effect waves pull-right"><i class="mdi mdi-plus"></i>Tạo tài liệu mới</button></a>
                                

                                <h4 class="header-title m-b-30"><b>Tài liệu của tôi</b></h4>

                                <div class="row">
                                    <?php include 'loadDoc.php' ?>

                                    <!--                           
                                    <div class="col-lg-3 col-xl-2">
                                        <div class="file-man-box">
                                            <a class="file-info" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                <i class="mdi mdi-information"></i>

                                            </a>
                                            <div class="dropdown-menu dropdown-menu-left dropdown-menu-animated dropdown-lg">

                                        
                                                <div class="dropdown-item noti-title">
                                                    <h5 class="m-0"><span class="float-right"><a href="" class="text-dark"></a> </span>Thông tin tài liệu</h5>
                                                </div>

                                                <div class="slimscroll" style="max-height: 300px;">
                                             
                                                    <p class="dropdown-item notify-item">Tên file: invoice_project.pdf </p>
                                                    <p class="dropdown-item notify-item">kích thước: 13.2KB </p>
                                                    <p class="dropdown-item notify-item">Loại file: upload </p>
                                                    <p class="dropdown-item notify-item ">Ngày tải lên: 29/10/2021 </p>
                                                    <p class="dropdown-item notify-item ">Thuộc tính: Chỉ mình tôi</p>


                                                </div>
                                            </div>

                                            <a href="" class="file-close"><i class="mdi mdi-close-circle"></i></a>
                                            <div class="file-img-box">
                                                <img src="../Assets/images/file_icons/pdf.svg" alt="icon">
                                            </div>
                                            <a href="#" class="file-download"><i class="mdi mdi-download"></i> </a>
                                            <div class="file-man-title">
                                                <h5 class="mb-0 text-overflow">invoice_project.pdf</h5>
                                                <p class="mb-0"><small>568.8 kb</small></p>
                                            </div>
                                        </div>
                                    </div> -->

                                    <!-- div thư mục -->
                                    <!-- <div class="col-lg-3 col-xl-2">
                                        <div class="file-man-box">
                                            <a href="" class="file-close"><i class="mdi mdi-close-circle"></i></a>
                                            <div class="file-img-box" style="font-size: 4rem;">
                                                <i class="mdi mdi-folder-multiple"></i>
                                            </div>
                                            <div class="file-man-title">
                                                <h5 class="mb-0 text-overflow text-center">Thư mục</h5>
                                                <p class="mb-0">&nbsp;</p>
                                            </div>
                                        </div>
                                    </div> -->

                                    <!-- test click -->
                                    <!-- <div class="col-lg-3 col-xl-2">
                                        <div class="file-man-box">
                                            <a href="" class="file-close"><i class="mdi mdi-close-circle"></i></a>
                                            <div class="file-img-box" style="font-size: 4rem;">
                                                <a href="<?php echo "/home/test.php?id=9&parent=1" ?>"><i class="mdi mdi-folder-multiple"></i></a>
                                            </div>
                                            <div class="file-man-title">
                                                <h5 class="mb-0 text-overflow text-center">Thư mục</h5>
                                                <p class="mb-0">&nbsp;</p>
                                            </div>
                                        </div>
                                    </div> -->

                                </div>


                                <!-- Button tai them -->
                                <!-- <div class="text-center mt-3">
                                    <button type="button" class="btn btn-outline-danger w-md waves-effect waves-light"><i class="mdi mdi-refresh"></i> Tải thêm</button>
                                </div> -->

                            </div>
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- container -->

            </div> <!-- content -->

            <footer class="footer text-right">
                2021 © IDEA Cloud. - Hệ thống quản lí tài liệu trực tuyến
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

    <!-- App js -->
    <script src="../Assets/js/jquery.core.js"></script>
    <script src="../Assets/js/jquery.app.js"></script>

</body>

</html>