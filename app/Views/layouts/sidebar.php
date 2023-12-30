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
                <img src="<?= base_url() ?>/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    Alexander | <strong>Admin</strong>
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

                <!-- Start Menu Admins -->
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-layer-group"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th-list"></i>
                        <p>
                            Data Master
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <div class="ml-4">
                                    <i class="fas fa-users nav-icon"></i>
                                    <p>Master Anggota</p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <div class="ml-4">
                                    <i class="fas fa-users-cog nav-icon"></i>
                                    <p>Master Admin</p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <div class="ml-4">
                                    <i class="fas fa-book nav-icon"></i>
                                    <p>Master Buku</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Transaksi -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Data Transaksi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <div class="ml-4">
                                    <i class="fas fa-swatchbook nav-icon"></i>
                                    <p>Katalog Buku</p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <div class="ml-4">
                                    <i class="fas fa-address-book nav-icon"></i>
                                    <p>Peminjaman</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- End Menu Admins -->

                <!-- Menu Users -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-layer-group"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-swatchbook"></i>
                        <p>
                            Katalog Buku
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-history"></i>
                        <p>
                            History Peminjaman
                        </p>
                    </a>
                </li>
                <!-- End Menu Users -->

                <!-- Users Control -->
                <li class="nav-header">
                    USER ACCOUNT
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