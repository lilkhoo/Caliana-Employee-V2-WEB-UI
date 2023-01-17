<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/dashboard', 'Home::index');

$routes->get('/', 'Login::index');
$routes->get('/lupa-password', 'Login::forgot');
$routes->post('/dashboard', 'Login::dummy');
$routes->post('/dashboard', 'Login::dummy');

// NAVBAR
$routes->get('/akun-profil', 'Pegawai::infosaya1');
$routes->get('/pengaturan-umum', 'Pegawai::infosaya2');
$routes->get('/keamanan', 'Pegawai::infosaya3');

// ADD PEGAWAI
$routes->get('/tambah-datadiri', 'Pegawai::addPegawai');
$routes->get('/tambah-datakepegawaian', 'Pegawai::addPegawai2');
$routes->get('/tambah-datapenggajian', 'Pegawai::addPegawai3');
$routes->get('/review-tambah-data', 'Pegawai::reviewPegawai');


// EDIT PEGAWAI
$routes->get('/edit-data-diri', 'Pegawai::editPegawai');
$routes->get('/edit-data-kepegawaian', 'Pegawai::editPegawai2');
$routes->get('/edit-data-penggajian', 'Pegawai::editPegawai3');


// DETAIL
$routes->get('/detail-kehadiran', 'Pegawai::detailKehadiran');
$routes->get('/detail-timeoff', 'Pegawai::detailTimeoff');
$routes->get('/detail-schedule', 'Pegawai::detailSchedule');
$routes->get('/detail-dashboard', 'Pegawai::detailDashboard');

// LISTGROUP
$routes->get('/detail-data-diri', 'Pegawai::detailPegawai');
$routes->get('/detail-data-kepegawaian', 'Pegawai::detailPegawai2');
$routes->get('/detail-data-penggajian', 'Pegawai::detailPegawai3');



// SIDEBAR PEGAWAI
$routes->get('/daftar-pegawai', 'Pegawai::index');
$routes->get('/tambah-pegawai', 'Pegawai::create');
$routes->get('/detail-pegawai', 'Pegawai::detail');
$routes->get('/daftar-kehadiran', 'Pegawai::kehadiran');
$routes->get('/daftar-time-off', 'Pegawai::timeOff');
$routes->get('/daftar-schedule', 'Pegawai::schedule');

// TAMBAH SCHEDULE
$routes->get('/tambah-schedule', 'Pegawai::custom');

// DEBUG
$routes->get("/searchbar", "Home::debug");
$routes->post('/daftar-kehadiran', 'Pegawai::kehadiran');
$routes->post('/daftar-time-off', 'Pegawai::timeoff');
$routes->post('/tambah-datadiri', 'Pegawai::addPegawai');
$routes->post('/tambah-datakepegawaian', 'Pegawai::addPegawai2');
$routes->post('/tambah-datapenggajian', 'Pegawai::addPegawai3');
$routes->post('/review-tambah-data', 'Pegawai::reviewPegawai');



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}