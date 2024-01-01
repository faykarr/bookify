<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Transaksi Peminjaman</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= url_to('peminjaman') ?>">Peminjaman</a></li>
                        <li class="breadcrumb-item active">Transaksi Peminjaman</li>
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
                <h3 class="card-title mt-1">Transaksi Peminjaman</h3>

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
                            <th>Kode Anggota</th>
                            <th>Nama Peminjam</th>
                            <th>Judul Buku</th>
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
                                    <?= $value['id_anggota'] ?>
                                </td>
                                <td>
                                    <?= $value['nama'] ?>
                                </td>
                                <td>
                                    <?= $value['judul_buku'] ?>
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
                                <td class="text-center">
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
                                        <a href="<?= base_url() . 'peminjaman/setujui/' . $value['id_peminjaman'] ?>"
                                            class="btn btn-warning btn-sm text-white <?= ($value['status'] == 'Disetujui' || $value['status'] == 'Ditolak' || $value['status'] == 'Sudah Kembali') ? 'disabled' : '' ?>">
                                            <i class="fas fa-sync mr-1"></i> Setujui
                                        </a>
                                        <?php if ($value['status'] == 'Pending'): ?>
                                            <a href="<?= base_url() ?>peminjaman/tolak/<?= $value['id_peminjaman'] ?>"
                                                class="btn btn-danger btn-sm">
                                                <i class="fas fa-times mr-1"></i> Tolak
                                            </a>
                                        <?php endif; ?>
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