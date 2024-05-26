<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('buku', 'BukuController::index');
$routes->get('mahasiswa', 'MahasiswaController::index');
$routes->get('asisten', 'AsistenController::index');