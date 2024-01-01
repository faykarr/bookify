<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">History Peminjaman</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= url_to('dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active">History Peminjaman</li>
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
                <h3 class="card-title mt-1">History Peminjaman</h3>

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
                <table id="master-buku" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>ID Pinjam</th>
                            <th>Judul Buku</th>
                            <th>Pengarang</th>
                            <th>Sampul Buku</th>
                            <th>Tanggal Pinjam</th>
                            <th>Jatuh Tempo</th>
                            <th>Tanggal Kembali</th>
                            <th>Status</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($model as $key => $value): ?>
                            <tr>
                                <td>
                                    <?= $key + 1 ?>
                                </td>
                                <td>
                                    <?= $value['id_peminjaman'] ?>
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
                                    <?= $value['tgl_pinjam'] ?>
                                </td>
                                <td>
                                    <?= $value['jatuh_tempo'] ?>
                                </td>
                                <td>
                                    <?php
                                    $status = '';
                                    if ($value['status'] == 'Pending') {
                                        $status = '<span class="badge p-2 bg-info"> Menunggu Konfirmasi </span>';
                                    } elseif ($value['status'] == 'Ditolak') {
                                        $status = '<span class="badge p-2 bg-danger"> Buku Tidak Dipinjam </span>';
                                    } elseif ($value['status'] == 'Disetujui') {
                                        $status = '<span class="badge p-2 bg-warning"> Belum Dikembalikan </span>';
                                    } elseif ($value['status'] == 'Ajukan Kembali') {
                                        $status = '<span class="badge p-2 bg-teal"> Pengajuan Kembali </span>';
                                    } else {
                                        $status = $value['tgl_kembali'];
                                    }
                                    echo $status;
                                    ?>
                                </td>
                                <td>
                                    <!-- Status with badge -->
                                    <?php
                                    $status = '';
                                    if ($value['status'] == 'Pending') {
                                        $status = '<span class="badge p-2 bg-info"> Pending </span>';
                                    } elseif ($value['status'] == 'Ditolak') {
                                        $status = '<span class="badge p-2 bg-danger"> Ditolak </span>';
                                    } elseif ($value['status'] == 'Disetujui') {
                                        $status = '<span class="badge p-2 bg-success"> Sedang Dipinjam </span>';
                                    } elseif ($value['status'] == 'Ajukan Kembali') {
                                        $status = '<span class="badge p-2 bg-teal"> Pengajuan Kembali </span>';
                                    } else {
                                        $status = '<span class="badge p-2 bg-secondary"> Sudah Dikembalikan </span>';
                                    }
                                    echo $status;
                                    ?>
                                </td>
                                <!-- Action buttons -->
                                <td class="text-center">
                                    <!-- View details book-->
                                    <div class="btn-group">
                                        <a href="<?= base_url() . 'history/kembali/' . $value['id_peminjaman'] ?>"
                                            class="btn btn-warning btn-sm text-white <?= ($value['status'] == 'Pending' || $value['status'] == 'Ditolak' || $value['status'] == 'Sudah Kembali' || $value['status'] == 'Ajukan Kembali') ? 'disabled' : '' ?>">
                                            <i class="fas fa-sync mr-1"></i> Kembalikan Buku
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