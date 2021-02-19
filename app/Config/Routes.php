<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Websia');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Websia::index');
$routes->get('/login', 'Login::index');
$routes->get('/daftar', 'Login::daftar');
$routes->get('/developer', 'Webservice::index');
$routes->get('/websia/Coba', 'Websia::coba');
$routes->get('/searchAndFilter', 'Websia::searchAndFilter');
$routes->get('/profil', 'Websia::profil');
$routes->get('/rekomendasi', 'Websia::rekomendasi');
$routes->get('/galeriFoto', 'Websia::galeriFoto');
$routes->get('/galeriVideo', 'Websia::galeriVideo');
$routes->get('/galeriWisuda', 'Websia::galeriWisuda');
$routes->get('/berandaBeritaArtikel', 'Websia::berandaBerita');
$routes->get('/beritaArtikel', 'Websia::berita');
$routes->get('/edit/profil', 'Websia::editProfil');
$routes->get('/edit/pendidikan', 'Websia::editPendidikan');
$routes->get('/edit/tempatKerja', 'Websia::editTempatKerja');
$routes->get('/edit/prestasi', 'Websia::editPrestasi');
$routes->get('/edit/publikasi', 'Websia::editPublikasi');
$routes->get('/edit/akun', 'Websia::editAkun');
$routes->get('/developer/edit/biodata', 'Webservice::editBiodata');
$routes->get('/developer/edit/akun', 'Webservice::editAkun');
$routes->get('/developer/proyek', 'Webservice::proyek');
$routes->get('/developer/buatProyek', 'Webservice::buatProyek');
$routes->get('/developer/profil', 'Webservice::profilDeveloper');
$routes->get('/developer/dokumentasi', 'Webservice::dokumentasi');


/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
