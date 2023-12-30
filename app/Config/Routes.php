<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// check session with key role

if (session()->get('roleUser') == 'anggota') {
    $routes->get('/', 'AnggotaController::index');
} elseif (session()->get('roleUser') == 'admin') {
    $routes->get('/', 'AdminController::index');
} else {
    $routes->get('/', 'AuthController::login');
}
