<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('coppel', 'Home::index');


$routes->group("api/v1/", function ($routes) {
  // Rutas Publicas
  $routes->post('registro', 'RegistroController::create');
  $routes->post('login', 'LoginController::create');

  // Rutas Privadas
  $routes->get('categoriaProductos', 'CategoriaProductoController::index', ['filter' => 'authFilter']);
  $routes->get('categoriaProductos/show/(:num)', 'CategoriaProductoController::show/$1', ['filter' => 'authFilter']);
  $routes->post('categoriaProductos', 'CategoriaProductoController::create', ['filter' => 'authFilter']);
  $routes->put('categoriaProductos/(:num)', 'CategoriaProductoController::update/$1', ['filter' => 'authFilter']);
  $routes->delete('categoriaProductos/(:num)', 'CategoriaProductoController::delete/$1', ['filter' => 'authFilter']);

});

