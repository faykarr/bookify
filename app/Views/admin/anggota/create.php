<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Anggota</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= url_to('anggota') ?>">Anggota</a></li>
                        <li class="breadcrumb-item"><a href="<?= url_to('anggota') ?>">Master Anggota</a></li>
                        <li class="breadcrumb-item active">Tambah Anggota</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content pb-3">
        <form action="<?= url_to('anggota/store') ?>" method="post" enctype="multipart/form-data">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Master Anggota</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <?= csrf_field() ?>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nim">NIM</label>
                                        <input type="text" id="nim" name="nim" class="form-control"
                                            autofocus pattern="\d{2}\.\d{3}\.\d{4}" title="Please enter a valid pattern like 22.230.0141" placeholder="ex: 21.230.0141">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap</label>
                                        <input type="text" id="nama" name="nama" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="ex: example@gmail.com">
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="no_telp">No Telepon</label>
                                        <input type="text" id="no_telp" name="no_telp" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" id="alamat" rows="4" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="gambar">Foto Profil</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="foto" name="foto">
                                        <label class="custom-file-label" for="foto">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="<?= url_to('anggota') ?>" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Tambah Data Anggota" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
</div>
<?= $this->endSection() ?>