<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Buku</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= url_to('buku') ?>">Buku</a></li>
                        <li class="breadcrumb-item"><a href="<?= url_to('buku') ?>">Master Buku</a></li>
                        <li class="breadcrumb-item active">Tambah Buku</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content pb-3">
        <form action="<?= url_to('buku/store') ?>" method="post" enctype="multipart/form-data">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Master Buku</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <?= csrf_field() ?>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="judul_buku">Judul Buku</label>
                                        <input type="text" id="judul_buku" name="judul_buku" class="form-control"
                                            autofocus>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="isbn">ISBN</label>
                                        <input type="text" id="isbn" name="isbn" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pengarang">Pengarang</label>
                                <input type="text" id="pengarang" name="pengarang" class="form-control">
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="penerbit">Penerbit</label>
                                        <input type="text" id="penerbit" name="penerbit" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="tahun_terbit">Tahun Terbit</label>
                                        <input type="number" min="1900" max="2099" step="1" value="2023"
                                            class="form-control" name="tahun_terbit" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="rak">Posisi Rak</label>
                                        <input type="text" id="rak" name="rak" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="stok_buku">Stok Buku</label>
                                        <input type="number" id="stok_buku" name="stok_buku" min="1" max="1000" step="1"
                                            value="1" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="deskripsi">Deskripsi Buku</label>
                                <textarea name="deskripsi" id="deskripsi" rows="4" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar Buku</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                        <label class="custom-file-label" for="gambar">Choose file</label>
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
                    <a href="<?= url_to('buku') ?>" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Tambah Data Buku" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
</div>
<?= $this->endSection() ?>