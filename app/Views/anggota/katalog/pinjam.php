<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pinjam Buku</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= url_to('dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= url_to('katalog') ?>">Katalog Buku</a></li>
                        <li class="breadcrumb-item active">Pinjam Buku</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content pb-3">
        <form action="<?= url_to('katalog/pinjam/store') ?>" method="post" enctype="multipart/form-data">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Pinjam Buku</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <?= csrf_field() ?>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="id_anggota">Kode Peminjam</label>
                                        <input type="text" id="id_anggota" class="form-control"
                                            value="<?= $anggota['id_anggota'] ?>" disabled readonly>
                                        <input type="hidden" name="id_anggota" value="<?= $anggota['id_anggota'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="isbn">Nama Peminjam</label>
                                        <input type="text" id="nama" name="nama" class="form-control"
                                            value="<?= $anggota['nama'] ?>" disabled readonly>
                                        <input type="hidden" name="nama" value="<?= $anggota['nama'] ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="id_buku">Kode Buku</label>
                                        <input type="text" id="id_buku" class="form-control"
                                            value="<?= $model['id_buku'] ?>" disabled readonly>
                                        <input type="hidden" name="id_buku" value="<?= $model['id_buku'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="judul_buku">Judul Buku</label>
                                        <input type="text" id="judul_buku" class="form-control"
                                            value="<?= $model['judul_buku'] ?>" disabled readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="isbn">ISBN Buku</label>
                                        <input type="text" id="isbn" class="form-control"
                                            value="<?= $model['isbn'] ?>" disabled readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="penerbit">Penerbit</label>
                                        <input type="text" id="penerbit" name="penerbit" class="form-control"
                                            value="<?= $model['penerbit'] ?>" disabled readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="rak">Posisi Rak Buku</label>
                                        <input type="text" value="<?= $model['rak'] ?>" class="form-control" name="rak"
                                            disabled readonly />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tgl_pinjam">Tanggal Mulai Pinjam</label>
                                        <input type="date" id="tgl_pinjam" name="tgl_pinjam" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jatuh_tempo">Tanggal Jatuh Tempo</label>
                                        <input type="date" id="jatuh_tempo" name="jatuh_tempo" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi Buku</label>
                                        <textarea name="deskripsi" id="deskripsi" rows="10" class="form-control"
                                            disabled readonly><?= $model['deskripsi'] ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <!-- Preview images from-->
                                    <div class="text-center" id="preview-gambar">
                                        <img src="<?= base_url() . 'uploads/' . $model['gambar'] ?>" alt="Sampul Buku"
                                            class="rounded shadow border border-primary" width="224px">
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
                    <a href="<?= url_to('katalog') ?>" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Ajukan Peminjaman Buku" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
</div>
<?= $this->endSection() ?>