<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Katalog Buku</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= url_to('dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Katalog Buku</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body pb-0">
                <div class="row">
                    <?php foreach ($buku as $key => $value): ?>
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                            <div class="card bg-light d-flex flex-fill">
                                <div class="card-header text-muted border-bottom-0">
                                    Kode Buku :
                                    <?= $value['id_buku'] ?>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-6">
                                            <h2 class="lead"><b>
                                                    <?= $value['judul_buku'] ?>
                                                </b></h2>
                                            <p class="text-muted text-sm text-justify"><b>About : </b>
                                                <?= $value['deskripsi'] ?>
                                            </p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small mb-2"><span class="fa-li"><i
                                                            class="fas fa-lg fa-user"></i></span><strong>Pengarang :
                                                        <?= $value['pengarang'] ?>
                                                    </strong></li>
                                                <li class="small"><span class="fa-li"><i
                                                            class="fas fa-lg fa-building"></i></span> Posisi Rak :
                                                    <?= $value['rak'] ?>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6 text-center">
                                            <img src="<?= base_url() ?>uploads/<?= $value['gambar'] ?>" alt="user-avatar"
                                                class="rounded-lg border border-secondary shadow" height="224px"
                                                style="background-size: cover;">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        <a href="<?= base_url() ?>katalog/pinjam/<?= $value['id_buku'] ?>" class="btn btn-sm <?= ($value['stok_buku'] == 0) ? 'disabled bg-dark' : 'bg-teal' ?>">
                                            <i class="fas fa-book-reader"></i> <?= ($value['stok_buku'] == 0) ? ' Stok Habis' : ' Pinjam Buku' ?>
                                        </a>
                                        <a href="<?= base_url() ?>katalog/<?= $value['id_buku'] ?>"
                                            class="btn btn-sm btn-primary">
                                            <i class="fas fa-eye"></i> Lihat Buku
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="card-footer">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <!-- Display Pagination Links -->
                        <?= $pager->links('default', 'bootstrap') ?>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection() ?>