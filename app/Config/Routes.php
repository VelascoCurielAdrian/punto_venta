<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('coppel', 'Home::index');


// $routes->resource('categoriaProductos', ['controller' => '/App/Controllers/CategoriaProductos.php']);

$routes->get('categoriaProductos', 'CategoriaProductos::index');
$routes->get('categoriaProductos/show/(:num)', 'CategoriaProductos::show/$1');
$routes->post('categoriaProductos', 'CategoriaProductos::create');
$routes->put('categoriaProductos/(:num)', 'CategoriaProductos::update/$1');



