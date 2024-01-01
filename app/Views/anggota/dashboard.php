<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Dashboard</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="m-0">Selamat Datang!</h5>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Welcome to system,
                                <?= $anggota['nama'] ?>!
                            </h6>

                            <p class="card-text">Sistem ini adalah sistem informasi peminjaman buku perpustakaan
                                berbasis
                                web online, ayo berkeliling fiturnya!.</p>
                            <a href="<?= url_to('katalog') ?>" class="btn btn-primary">Pergi ke Katalog Buku</a>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                    src="<?= base_url() ?>uploads/anggota/<?= $anggota['foto'] ?>"
                                    alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">
                                <?= $anggota['nama'] ?>
                            </h3>

                            <p class="text-muted text-center">
                                <?= $anggota['nim'] ?>
                            </p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>No Telepon</b> <a class="float-right">
                                        <?= $anggota['no_telp'] ?>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <b>Alamat</b> <a class="float-right">
                                        <?= $anggota['alamat'] ?>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <b>ID Anggota</b> <a class="float-right">
                                        <?= $anggota['id_anggota'] ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col-md-6 -->
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box bg-gradient-info">
                        <span class="info-box-icon"><i class="far fa-bookmark"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Pinjaman Buku</span>
                            <span class="info-box-number"><?= $total_peminjaman ?> Buku</span>
                            <span class="progress-description">
                                <?= $total_peminjaman ?> Transaksi Peminjaman
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<?= $this->endSection() ?>