<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Đăng Nhập</title>
</head>

<body>
    <div style="background-image: url('../img/nenlogin.jpg'); background-repeat: no-repeat">
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                                <div class="mb-md-5 mt-md-4 pb-5">

                                    <h2 class="fw-bold mb-2 text-uppercase">Đăng Nhập</h2>
                                    <br><br>
                                    <form action="process-login.php" method="POST" class="text-center">
                                        <div class="form-outline form-white mb-4">
                                            Tài khoản:
                                            <input type="text" id="username" name="username"
                                                class="form-control form-control-lg" />
                                        </div>

                                        <div class="form-outline form-white mb-4">
                                            Mật khẩu:
                                            <input type="password" id="password" name="password"
                                                class="form-control form-control-lg" />
                                        </div>

                                        <p class="small mb-5 pb-lg-2"><a class="text-secondary"
                                                href="../forgotpass/forgotpass.php">Quên mật
                                                khẩu?</a>
                                        </p>
                                        <button class="btn btn-outline-primary btn-secondary text-white px-5"
                                            type="submit" name="submit">Đăng nhập</button>
                                    </form>
                                    <br>
                                    <div>
                                        <p class="mb-0">Bạn chưa có tài khoản? <a href="../register/register.php"
                                                class="text-primary-50 fw-bold">Đăng Ký
                                            </a></p>
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