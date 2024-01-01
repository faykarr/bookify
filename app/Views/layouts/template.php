<?php $uri = service('uri') ?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
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

    <?php if ($uri->getSegment(1) == 'buku' || $uri->getSegment(1) == 'anggota'  || $uri->getSegment(1) == 'katalog' || $uri->getSegment(1) == 'peminjaman'|| $uri->getSegment(1) == 'history'): ?>
        <!-- DataTables -->
        <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet"
            href="<?= base_url() ?>/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
        <!-- SweetAlert2 -->
        <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <?php endif; ?>

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url() ?>/assets/dist/img/bookify-logo.jpg" type="image/x-icon" />
    <!-- jQuery -->
    <script src="<?= base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light" aria-label="">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link fw-bold">Bookify</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <?= $this->include('layouts/sidebar') ?>

        <!-- Content Wrapper. Contains page content -->
        <?= $this->renderSection('content') ?>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Bookify | Sistem Informasi Perpustakaan Online | 22.230.0141
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2024</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <?php if ($uri->getSegment(1) == 'buku' || $uri->getSegment(1) == 'anggota'  || $uri->getSegment(1) == 'katalog' || $uri->getSegment(1) == 'peminjaman'|| $uri->getSegment(1) == 'history'): ?>
        <!-- DataTables  & Plugins -->
        <script src="<?= base_url() ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url() ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?= base_url() ?>/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?= base_url() ?>/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="<?= base_url() ?>/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?= base_url() ?>/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="<?= base_url() ?>/assets/plugins/jszip/jszip.min.js"></script>
        <script src="<?= base_url() ?>/assets/plugins/pdfmake/pdfmake.min.js"></script>
        <script src="<?= base_url() ?>/assets/plugins/pdfmake/vfs_fonts.js"></script>
        <script src="<?= base_url() ?>/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="<?= base_url() ?>/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="<?= base_url() ?>/assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
        <!-- SweetAlert2 -->
        <script src="<?= base_url() ?>/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <?php endif; ?>

    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/assets/dist/js/adminlte.min.js"></script>

    <?php if ($uri->getSegment(1) == 'buku' || $uri->getSegment(1) == 'anggota' || $uri->getSegment(1) == 'katalog' || $uri->getSegment(1) == 'peminjaman'|| $uri->getSegment(1) == 'history') : ?>
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

        <!-- Script SweetAlert2 -->
        <script>
            $(document).ready(function () {
                // Show success alert after add data
                <?php if (session()->getFlashdata('success')): ?>
                    Swal.fire(
                        'Berhasil!',
                        '<?= session()->getFlashdata('success') ?>',
                        'success'
                    );
                <?php endif; ?>

                // Show error alert after add data
                <?php if (session()->getFlashdata('error')): ?>
                    Swal.fire(
                        'Gagal!',
                        '<?= session()->getFlashdata('error') ?>',
                        'error'
                    );
                <?php endif; ?>

                $('.delete').click(function (e) {
                    e.preventDefault();
                    var url = $(this).data('url');
                    Swal.fire({
                        title: 'Apakah anda yakin?',
                        text: "Data yang dihapus tidak dapat dikembalikan!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#dc3545',
                        cancelButtonColor: '#6c757d',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: url,
                                type: 'GET',
                                error: function () {
                                    Swal.fire(
                                        'Gagal!',
                                        'Data gagal dihapus.',
                                        'error'
                                    )
                                },
                                success: function (data) {
                                    Swal.fire(
                                        'Berhasil!',
                                        'Data berhasil dihapus.',
                                        'success'
                                    ).then((result) => {
                                        location.reload();
                                    })
                                }
                            });
                        }
                    })
                });
            });
        </script>
    <?php endif; ?>
</body>

</html>