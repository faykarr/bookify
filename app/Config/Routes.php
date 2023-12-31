<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('/', ['filter' => 'rolecheck'], function ($routes) {
    $routes->get('/', 'AdminController::index');
    $routes->get('/dashboard', 'AdminController::index');
    $routes->get('/buku', 'AdminController::indexBuku');
    $routes->get('/buku/create', 'AdminController::createBuku');
});

$routes->get('/', 'AnggotaController::index');
$routes->get('/dashboard', 'AnggotaController::index');