<?php

$auth = service('authentication');
$uri = service('uri');
// Check if the role is not admin
if ($auth->user()->role != 'admin') {
    // Get nama in anggota model using auth
    $anggotaModel = new \App\Models\AnggotaModel();
    $nama = $anggotaModel->where('id_user', $auth->user()->id)->first()['nama'];
    $gambar = $anggotaModel->where('id_user', $auth->user()->id)->first()['foto'];
} else {
    $nama = $auth->user()->username;
}
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" aria-label="">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?= base_url() ?>/assets/dist/img/bookify-logo.jpg" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold ml-4">Bookify</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url() ?><?= ($auth->user()->role != 'admin') ? 'uploads/anggota/'. $gambar : '/assets/dist/img/user2-160x160.jpg' ?>" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="<?= base_url() ?>" class="d-block">
                    <?= strtoupper($nama) ?></strong>
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2" aria-label="">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-header">
                    MAIN NAVIGATION
                </li>

                <?php if ($auth->user()->role == 'admin'): ?>
                    <!-- Start Menu Admins -->
                    <li class="nav-item">
                        <a href="<?= url_to('/') ?>"
                            class="nav-link <?= ($uri->getSegment(1) === '' || $uri->getSegment(1) === 'dashboard') ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-layer-group"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>

                    <li
                        class="nav-item <?= ($uri->getSegment(1) === 'buku' || $uri->getSegment(1) === 'anggota') ? 'menu-is-opening menu-open' : '' ?>">
                        <a href="#"
                            class="nav-link <?= ($uri->getSegment(1) === 'buku' || $uri->getSegment(1) === 'anggota') ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-th-list"></i>
                            <p>
                                Data Master
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= url_to('anggota') ?>"
                                    class="nav-link <?= ($uri->getSegment(1) === 'anggota') ? 'active' : '' ?>">
                                    <div class="ml-4">
                                        <i class="fas fa-users nav-icon"></i>
                                        <p>Master Anggota</p>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= url_to('buku') ?>"
                                    class="nav-link <?= ($uri->getSegment(1) === 'buku') ? 'active' : '' ?>">
                                    <div class="ml-4">
                                        <i class="fas fa-book nav-icon"></i>
                                        <p>Master Buku</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Transaksi -->
                    <li class="nav-item <?= ($uri->getSegment(1) === 'peminjaman') ? 'menu-is-opening menu-open' : '' ?>">
                        <a href="#" class="nav-link <?= ($uri->getSegment(1) === 'peminjaman') ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Data Transaksi
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= url_to('peminjaman') ?>"
                                    class="nav-link <?= ($uri->getSegment(1) === 'peminjaman') ? 'active' : '' ?>">
                                    <div class="ml-4">
                                        <i class="fas fa-address-book nav-icon"></i>
                                        <p>Peminjaman</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- End Menu Admins -->
                <?php endif; ?>

                <?php if ($auth->user()->role == 'anggota'): ?>
                    <!-- Menu Users -->
                    <li class="nav-item">
                        <a href="<?= url_to('/') ?>"
                            class="nav-link <?= ($uri->getSegment(1) === '' || $uri->getSegment(1) === 'dashboard') ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-layer-group"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?= url_to('katalog') ?>"
                            class="nav-link <?= ($uri->getSegment(1) === 'katalog') ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-swatchbook"></i>
                            <p>
                                Katalog Buku
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?= url_to('history') ?>"
                            class="nav-link <?= ($uri->getSegment(1) === 'history') ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-history"></i>
                            <p>
                                History Peminjaman
                            </p>
                        </a>
                    </li>
                    <!-- End Menu Users -->
                <?php endif; ?>

                <!-- Users Control -->
                <li class="nav-header">
                    USER ACCOUNT -
                    <?= strtoupper($auth->user()->role) ?>
                </li>

                <li class="nav-item">
                    <a href="<?= url_to('logout') ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>