<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Peges::index');
$routes->get('/homeadmin', 'Home::index');
$routes->get('/profildesa', 'Peges::profildesa');
$routes->get('/informasidesa', 'Peges::informasidesa');
$routes->get('/kontakdesa', 'Peges::kontakdesa');
$routes->get('/daftarkeluargadesa', 'Peges::daftarkeluargadesa');
$routes->get('/admindesa', 'Peges::admindesa');
$routes->get('/viewkeluarga', 'Peges::tabelkeluarga');
$routes->get('/tampilkeluarga', 'Peges::tampiladmin');
$routes->get('/keluargacreate', 'Peges::creatdata');
$routes->post('/keluarga/store', 'Peges::store');
$routes->get('keluarga/delete/(:num)', 'Peges::delete/$1');
$routes->get('keluarga/edit/(:num)', 'Peges::edit/$1');
$routes->post('keluarga/update/(:num)', 'Peges::update/$1');
$routes->get('/register', 'Register::index');
$routes->post('/register/process', 'Register::process');
$routes->get('/login', 'Login::index');
$routes->post('/login/process', 'Login::process');
$routes->get('/logout', 'Login::logout');
$routes->get('/tampilpesan', 'Kontak::tampilpesan');
$routes->post('/pesan/store', 'Kontak::kontakstore');
$routes->get('kontak/delete/(:num)', 'Kontak::delete/$1');
$routes->get('/cari', 'Cari::index');
$routes->get('/info1', 'Peges::infor1');
$routes->get('/info2', 'Peges::infor2');
$routes->get('/info3', 'Peges::infor3');
$routes->get('/info4', 'Peges::infor4');
$routes->get('/info5', 'Peges::infor5');
$routes->get('/info6', 'Peges::infor6');	
$routes->get('/tampilberita', 'Blog::index');
$routes->get('blog/view/(:num)', 'Blog::view/$1');
$routes->get('/blogform', 'Blog::form');
$routes->post('blog/simpan', 'Blog::simpan');
$routes->get('blog/hapus/(:num)', 'Blog::hapus/$1');
$routes->get('blog/form_edit/(:num)', 'Blog::form_edit/$1');
$routes->post('blog/edit', 'Blog::edit');
$routes->get('peges/view/(:num)', 'Peges::view/$1');
$routes->get('/tampilberkas', 'Berkas::index');
$routes->get('/berkascreate', 'Berkas::create');
$routes->post('/berkas/save', 'Berkas::save');
$routes->get('/berkas/download/(:num)', 'Berkas::download/$1');
$routes->get('/tampilberkashome', 'Berkas::home');




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
