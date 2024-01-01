<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bookify | Sistem Informasi Perpustakaan Online</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/dist/css/adminlte.min.css">
    <!-- icheckBootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Favicon -->
    <link rel="icon" href="<?= base_url() ?>/assets/dist/img/bookify-logo.jpg" type="image/x-icon" />
    <script src="<?= base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="<?= base_url() ?>"><b>Bookify</b> | Sistem Informasi Perpustakaan Online</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register a new membership</p>

                <?= view('Myth\Auth\Views\_message_block') ?>

                <form action="<?= url_to('register') ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>

                    <div class="input-group mb-3">
                        <input type="text"
                            class="form-control <?php if (session('errors.fullname')): ?>is-invalid<?php endif ?>"
                            placeholder="Full name" name="fullname" value="<?= old('fullname') ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text"
                            class="form-control <?php if (session('errors.nim')): ?>is-invalid<?php endif ?>"
                            placeholder="NIM" name="nim" value="<?= old('nim') ?>" pattern="\d{2}\.\d{3}\.\d{4}"
                            title="Please enter a valid pattern like 22.230.0141">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-id-card-alt"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email"
                            class="form-control <?php if (session('errors.email')): ?>is-invalid<?php endif ?> "
                            placeholder="Email" name="email" value="<?= old('email') ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text"
                            class="form-control <?php if (session('errors.alamat')): ?>is-invalid<?php endif ?>"
                            placeholder="Alamat" name="alamat" value="<?= old('alamat') ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-home"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text"
                            class="form-control <?php if (session('errors.no_telp')): ?>is-invalid<?php endif ?>"
                            placeholder="No Telepon" name="no_telp" value="<?= old('no_telp') ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text"
                            class="form-control <?php if (session('errors.username')): ?>is-invalid<?php endif ?> "
                            placeholder="Username" name="username" value="<?= old('username') ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-sign-in-alt"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password"
                            class="form-control <?php if (session('errors.password')): ?>is-invalid<?php endif ?>"
                            placeholder="Password" name="password" autocomplete="off">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password"
                            class="form-control <?php if (session('errors.pass_confirm')): ?>is-invalid<?php endif ?>"
                            placeholder="Retype password" name="pass_confirm" autocomplete="off">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto" name="foto">
                            <label class="custom-file-label" for="foto">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Foto</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="<?= url_to('login') ?>" class="text-center">I already have a membership</a>
                </div>

            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- REQUIRED SCRIPTS -->
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/assets/dist/js/adminlte.min.js"></script>
    <script src="<?= base_url() ?>/assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            bsCustomFileInput.init();
            $("#master-buku").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["excel", "pdf", "print"]
            }).buttons().container().appendTo('#master-buku_wrapper .col-md-6:eq(0)');
        });
    </script>
</body>

</html>