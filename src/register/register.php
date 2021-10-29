<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="../Assets/bootstrap5/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="../Assets/bootstrap5/js/boostrap.min.js"></script>
    <title>Đăng Ký</title>
</head>

<body>
    <div style="background-image: url('../../img/nenlogin.jpg'); background-repeat: no-repeat">
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                                <div class="mb-md-5 mt-md-4 pb-5">

                                    <h2 class="fw-bold mb-2 text-uppercase">Đăng ký</h2>
                                    <form class="mx-1 mx-md-4" action="process-register.php" method="post">
                                        <p class="text-white-50 mb-5">Vui lòng điền đầy đủ thông tin !</p>

                                        <div class="form-outline form-white mb-2">
                                            Tên tài khoản:
                                            <input type="text" name="username" class="form-control form-control-lg" />
                                        </div>
                                        <div class="form-outline form-white mb-2">
                                            Tên đầy đủ:
                                            <input type="text" name="fullname" class="form-control form-control-lg" />
                                        </div>
                                        <div class="form-outline form-white mb-2">
                                            Email:
                                            <input type="text" name="email" class="form-control form-control-lg" />
                                        </div>
                                        <div class="form-outline form-white mb-2">
                                            Số điện thoại:
                                            <input type="text" name="sdt" class="form-control form-control-lg" />
                                        </div>
                                        <div class="form-outline form-white mb-2">
                                            Mật khẩu:
                                            <input type="password" id="password1" name="password1"
                                                class="form-control form-control-lg" />
                                        </div>
                                        <div class="form-outline form-white mb-2">
                                            Nhập lại mật khẩu:
                                            <input onkeyup='checkpass();' type="password" id="password2"
                                                name="password2" class="form-control form-control-lg" />
                                            <span id="check"></span>
                                        </div>

                                        <br>
                                        <button class="btn btn-secondary text-white px-5" disabled type="submit"
                                            id="btnsubmit" name="btnsubmit">Đăng Ký</button>
                                    </form>
                                    <script>
                                    function checkpass() {
                                        if (document.getElementById('password1').value == document.getElementById(
                                                'password2').value) {
                                            document.getElementById('check').innerHTML = "";
                                            document.getElementById('btnsubmit').disabled = false;
                                        } else {
                                            document.getElementById('check').innerHTML = "Mật khẩu không trùng";
                                            document.getElementById('btnsubmit').disabled = true;
                                        }
                                    }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>