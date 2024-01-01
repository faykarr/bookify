<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Buku</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= url_to('dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= url_to('katalog') ?>">Katalog Buku</a></li>
                        <li class="breadcrumb-item active">Detail Buku</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content pb-3">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Detail Buku</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="maximize" title="Maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                        <span class="info-box-text text-center text-muted">Kode Buku</span>
                                        <span class="info-box-number text-center text-muted mb-0">
                                            <?= $model['id_buku'] ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                        <span class="info-box-text text-center text-muted">ISBN</span>
                                        <span class="info-box-number text-center text-muted mb-0">
                                            <?= $model['isbn'] ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                        <span class="info-box-text text-center text-muted">Stok Buku</span>
                                        <span class="info-box-number text-center text-muted mb-0">
                                            <?= $model['stok_buku'] ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h4>Detail Buku</h4>
                                <!-- About Me Box -->
                                <div class="card card-primary mt-2">
                                    <div class="card-header">
                                        <h3 class="card-title">About Book</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <strong><i class="fas fa-book-open mr-1"></i> Judul Buku</strong>

                                        <p class="text-muted">
                                            <?= $model['judul_buku'] ?>
                                        </p>

                                        <hr>

                                        <strong><i class="fas fa-user mr-1"></i> Pengarang</strong>

                                        <p class="text-muted">
                                            <?= $model['pengarang'] ?>
                                        </p>

                                        <hr>

                                        <strong><i class="fas fa-book mr-1"></i> Penerbit</strong>

                                        <p class="text-muted">
                                            <?= $model['penerbit'] ?>
                                        </p>

                                        <hr>

                                        <strong><i class="fas fa-calendar mr-1"></i> Tahun Terbit</strong>

                                        <p class="text-muted">
                                            <?= $model['tahun_terbit'] ?>
                                        </p>

                                        <hr>

                                        <strong><i class="far fa-file-alt mr-1"></i> Posisi Rak Buku</strong>

                                        <p class="text-muted">
                                            <?= $model['rak'] ?>
                                        </p>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-md-4 col-6">
                                <div class="mt-3">
                                    <a href="<?= base_url() ?>katalog/pinjam/<?= $model['id_buku'] ?>" class="btn <?= ($model['stok_buku'] == 0) ? 'disabled btn-dark' : 'btn-success' ?>"><i
                                            class="fas fa-book-reader mr-1"></i> <?= ($model['stok_buku'] == 0) ? ' Stok Habis' : ' Pinjam Buku' ?></a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="mt-3 float-right">
                                    <a href="<?= url_to('katalog') ?>" class="btn btn-secondary"><i
                                            class="fas fa-arrow-left mr-1"></i> Back to Katalog
                                        Buku</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                        <h3 class="text-primary font-weight-bold">
                            <?= strtoupper($model['judul_buku']) ?>
                        </h3>
                        <p class="text-muted">
                            <?= $model['deskripsi'] ?>
                        </p>
                        <div>
                            <img src="<?= base_url('uploads/' . $model['gambar']) ?>" alt="Sampul Buku"
                                class="img-fluid rounded shadow border border-secondary" width="100%">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->

</div>
<?= $this->endSection() ?>