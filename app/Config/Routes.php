<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('/', ['filter' => 'rolecheck'], function ($routes) {
    $routes->get('/', 'AdminController::index');
    $routes->get('dashboard', 'AdminController::index');
    $routes->get('buku', 'AdminController::indexBuku');
    $routes->get('buku/create', 'AdminController::createBuku');
    $routes->post('buku/store', 'AdminController::storeBuku');
    $routes->get('buku/delete/(:segment)', 'AdminController::deleteBuku/$1');
    $routes->get('buku/edit/(:segment)', 'AdminController::editBuku/$1');
    $routes->post('buku/update', 'AdminController::updateBuku');
});

$routes->get('/', 'AnggotaController::index');
$routes->get('/dashboard', 'AnggotaController::index');