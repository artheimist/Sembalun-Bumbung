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
$routes->get('/', 'Home::index');
$routes->get('/Sejarah', 'Sejarah::index');
$routes->get('/Pariwisata', 'Pariwisata::index');
$routes->get('/Oleh-Oleh', 'Khas::index');
$routes->get('/Login', 'login::index');

$routes->get('/Pariwisata/Detail/(:num)', 'Pariwisata::detail/$1');
$routes->get('/Sejarah/Detail/(:num)', 'Sejarah::detail/$1');

$routes->post('/login/auth', 'login::auth');

$routes->get('/Admin/Overview', 'Admin::index',['filter' => 'authfilter']);
$routes->get('/Admin/Pariwisata', 'Admin::pariwisata');
$routes->get('/Admin/Sejarah', 'Admin::sejarah');

$routes->get('/Admin/PariwisataAdd', 'Admin::pariwisataAdd');
$routes->post('/Admin/PariwisataAdd/AddArtikelP', 'Admin::addArtikelP');
$routes->get('/Admin/Pariwisata/Edit/(:num)', 'Admin::pariwisataEdit/$1');
$routes->post('/Admin/Pariwisata/Update/(:segment)', 'Admin::pariwisataUpdate/$1');
$routes->get('/Admin/Pariwisata/delete/(:num)', 'Admin::pariwisataDelete/$1');

$routes->get('/Admin/SejarahAdd', 'Admin::sejarahAdd');
$routes->post('/Admin/SejarahAdd/addArtikel', 'Admin::addArtikelS');
$routes->get('/Admin/Sejarah/Edit/(:num)', 'Admin::sejarahEdit/$1');
$routes->post('/Admin/Sejarah/Update/(:segment)', 'Admin::SejarahUpdate/$1');
$routes->get('/Admin/Sejarah/delete/(:num)', 'Admin::sejarahDelete/$1');

$routes->get('/Login/Logout', 'Login::Logout');

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
