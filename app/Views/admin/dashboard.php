<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<?php
// Import class BukuModel, AnggotaModel, dan PeminjamanModel
$bukuModel = new \App\Models\BukuModel();
$anggotaModel = new \App\Models\AnggotaModel();
$peminjamanModel = new \App\Models\PeminjamanModel();
?>
<?php
// Get total buku
$total_buku = $bukuModel->countAllResults();
// Get total anggota
$total_anggota = $anggotaModel->countAllResults();
// Get total buku dipinjam
$total_buku_dipinjam = $peminjamanModel->where('status', 'Sudah Kembali')->countAllResults();
?>
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
            <div class="row justify-content-center mt-4">
                <div class="col-md-8">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">Selamat Datang, Admin!</h5>

                            <p class="card-text">
                                Sistem ini merupakan Sistem Informasi Peminjaman Buku Perpustakaan Berbasis Web Online.
                                Cobalah untuk mengeksplorasi sistem ini sebagai admin!
                            </p>

                            <a href="<?= base_url('buku') ?>" class="btn btn-primary card-link">
                                <i class="fas fa-book mr-1"></i> Lihat Buku
                            </a>
                        </div>
                    </div><!-- /.card -->
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-md-4">
                    <!-- Total Buku -->
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-book"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Buku</span>
                            <span class="info-box-number">
                                <?= $total_buku ?> Buku
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- Total Anggota -->
                <div class="col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Anggota</span>
                            <span class="info-box-number">
                                <?= $total_anggota ?> Anggota
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- Total Buku Dipinjam -->
                <div class="col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-book-reader"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Buku Dipinjam</span>
                            <span class="info-box-number">
                                <?= $total_buku_dipinjam ?> Buku
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