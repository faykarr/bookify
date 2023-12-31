<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Anggota</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= url_to('anggota') ?>">Anggota</a></li>
                        <li class="breadcrumb-item"><a href="<?= url_to('anggota') ?>">Master Anggota</a></li>
                        <li class="breadcrumb-item active">Detail Anggota</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content pb-3">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Detail Anggota</h3>

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
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-4">
                        <div class="card card-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-secondary">
                                <h3 class="widget-user-username"><?= $model['nama'] ?></h3>
                                <h5 class="widget-user-desc">Anggota Perpustakaan</h5>
                            </div>
                            <div class="widget-user-image">
                                <img class="img-circle elevation-2"
                                    src="<?= base_url() ?>/uploads/anggota/<?= $model['foto'] ?>" alt="User Avatar">
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header"><?= $model['id_anggota'] ?></h5>
                                            <span class="description-text">ID Anggota</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">Skip Dulu</h5>
                                            <span class="description-text">Total Pinjam</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4">
                                        <div class="description-block">
                                            <h5 class="description-header"><?= $model['nim'] ?></h5>
                                            <span class="description-text">NIM</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="<?= url_to('anggota') ?>" class="btn btn-secondary btn-sm">Back to Master Anggota</a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <!-- About Me Box -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">About Anggota</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="fas fa-book-reader mr-1"></i> NIM</strong>

                                <p class="text-muted">
                                    <?= $model['nim'] ?>
                                </p>

                                <hr>

                                <strong><i class="fas fa-user mr-1"></i> Nama Lengkap</strong>

                                <p class="text-muted">
                                    <?= $model['nama'] ?>
                                </p>

                                <hr>

                                <strong><i class="fas fa-envelope mr-1"></i> Email</strong>

                                <p class="text-muted">
                                    <?= $user->email ?>
                                </p>

                                <hr>

                                <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

                                <p class="text-muted">
                                    <?= $model['alamat'] ?>
                                </p>

                                <hr>

                                <strong><i class="fas fa-phone mr-1"></i> No Telepon</strong>

                                <p class="text-muted">
                                    <?= $model['no_telp'] ?>
                                </p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection() ?>