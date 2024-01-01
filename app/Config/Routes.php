<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'DashboardController::index');
$routes->get('dashboard', 'DashboardController::index');

$routes->group('/', ['filter' => 'admincheck'], function ($routes) {
    $routes->get('buku', 'AdminController::indexBuku');
    $routes->get('buku/create', 'AdminController::createBuku');
    $routes->post('buku/store', 'AdminController::storeBuku');
    $routes->get('buku/delete/(:segment)', 'AdminController::deleteBuku/$1');
    $routes->get('buku/edit/(:segment)', 'AdminController::editBuku/$1');
    $routes->post('buku/update', 'AdminController::updateBuku');
    $routes->get('buku/(:segment)', 'AdminController::detailBuku/$1');
    $routes->get('anggota', 'AdminController::indexAnggota');
    $routes->get('anggota/create', 'AdminController::createAnggota');
    $routes->post('anggota/store', 'AdminController::storeAnggota');
    $routes->get('anggota/delete/(:segment)', 'AdminController::deleteAnggota/$1');
    $routes->get('anggota/edit/(:segment)', 'AdminController::editAnggota/$1');
    $routes->post('anggota/update', 'AdminController::updateAnggota');
    $routes->get('anggota/(:segment)', 'AdminController::detailAnggota/$1');
    $routes->get('peminjaman', 'AdminController::indexPeminjaman');
    $routes->get('peminjaman/tolak/(:segment)', 'AdminController::tolakPeminjaman/$1');
    $routes->get('peminjaman/setujui/(:segment)', 'AdminController::setujuiAction/$1');
});

$routes->group('/', ['filter' => 'anggotacheck'], function ($routes) {
    $routes->get('katalog', 'AnggotaController::katalog');
    $routes->get('katalog/(:segment)', 'AnggotaController::showBuku/$1');
    $routes->get('katalog/pinjam/(:segment)', 'AnggotaController::pinjamBuku/$1');
    $routes->post('katalog/pinjam/store', 'AnggotaController::storePeminjaman');
    $routes->get('history', 'AnggotaController::historyPeminjaman');
    $routes->get('history/kembali/(:segment)', 'AnggotaController::kembaliPeminjaman/$1');
});