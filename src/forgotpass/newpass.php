<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Mật Khẩu Mới</title>
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

                                    <h2 class="fw-bold mb-2 text-uppercase">Mật Khẩu Mới</h2>
                                    <br><br>
                                    <form action="process-newpass.php" method="POST" class="text-center">
                                        <div class="form-outline form-white mb-4">
                                            <?php  $email=$_GET['email']; ?>
                                            <input name="email" id="email" value="<?php echo $email;?>" hidden="hidden">
                                        </div>
                                        <div class="form-outline form-white mb-4">
                                            Mật khẩu Mới:
                                            <input type="password" id="password" name="password1"
                                                class="form-control form-control-lg" />
                                        </div>

                                        <div class="form-outline form-white mb-4">
                                            Nhập Lại Mật Khẩu Mới:
                                            <input type="password" id="password" name="password2"
                                                class="form-control form-control-lg" />
                                        </div>
                                        <button class="btn btn-outline-primary btn-secondary text-white px-5"
                                            type="submit" name="submit">Tiếp theo</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
</body>

</html>