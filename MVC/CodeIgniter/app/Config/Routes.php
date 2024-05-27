<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('buku', 'BukuController::index');
$routes->get('mahasiswa', 'MahasiswaController::index');
$routes->get('asisten', 'AsistenController::index');

//Insert Delete
$routes->get('inputMahasiswa', 'Mahasiswa_Controller::toInputMahasiswa');
$routes->post('submitMahasiswa', 'Mahasiswa_Controller::submitMahasiswa');