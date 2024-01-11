<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('coppel', 'Home::index');
$routes->get('categoriaProductos', 'CategoriaProductos::index');
$routes->get('productos', 'Productos::index');
