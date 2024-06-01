<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\AsistenController;

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
$routes->get('updateMahasiswa', 'MahasiswaController1::updateMahasiswa');


$routes->get('asisten/form', [AsistenController::class, 'form']);
$routes->post('asisten/simpan', [AsistenController::class, 'simpan']);
$routes->get('asisten/daftar', [AsistenController::class, 'daftar']);
$routes->get('asisten/formEdit/(:segment)', 'AsistenController::formEdit/$1');
$routes->post('asisten/update', 'AsistenController::update');

$routes->get('asisten/formHapus/(:segment)', 'AsistenController::formHapus/$1');
$routes->post('asisten/hapus', 'AsistenController::hapus');
