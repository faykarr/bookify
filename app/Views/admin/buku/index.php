<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Master Buku</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= url_to('buku') ?>">Buku</a></li>
                        <li class="breadcrumb-item active">Master Buku</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content pb-2">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title mt-1">Master Buku</h3>

                <div class="card-tools">
                    <!-- Add data master buku button -->
                    <a href="<?= url_to('buku/create') ?>" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus"></i> Tambah Data
                    </a>

                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                    <button type="button" class="btn btn-tool" data-card-widget="maximize" title="Maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table id="master-buku" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>ID Buku</th>
                            <th>ISBN</th>
                            <th>Judul Buku</th>
                            <th>Pengarang</th>
                            <th>Sampul Buku</th>
                            <th>Stok Buku</th>
                            <th>Rak</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($model as $key => $value): ?>
                            <tr>
                                <td>
                                    <?= $key + 1 ?>
                                </td>
                                <td>
                                    <?= $value['id_buku'] ?>
                                </td>
                                <td>
                                    <?= $value['isbn'] ?>
                                </td>
                                <td>
                                    <?= $value['judul_buku'] ?>
                                </td>
                                <td>
                                    <?= $value['pengarang'] ?>
                                </td>
                                <td class="text-center">
                                    <img src="<?= base_url('uploads/' . $value['gambar']) ?>" alt="Sampul Buku"
                                        class="rounded shadow border border-secondary" width="50">
                                </td>
                                <td class="text-center">
                                    <?= $value['stok_buku'] ?>
                                </td>
                                <td>
                                    <?= $value['rak'] ?>
                                </td>
                                <!-- Action buttons -->
                                <td class="text-center">
                                    <!-- View details book-->
                                    <div class="btn-group">
                                        <a href="<?= base_url() . 'buku/' . $value['id_buku'] ?>" class="btn btn-primary btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="<?= base_url() . 'buku/edit/' . $value['id_buku'] ?>" class="btn btn-warning btn-sm text-white">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <!-- Show confirm delete button with sweetalert, class & jquery -->
                                        <a href="#" class="btn btn-danger btn-sm delete" data-url="<?= base_url() . 'buku/delete/' . $value['id_buku'] ?>">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<?= $this->endSection() ?>