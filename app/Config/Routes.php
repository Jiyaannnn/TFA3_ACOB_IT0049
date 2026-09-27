<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
// A route connects a browser URL to the controller method that should handle it.
$routes->get('/', 'Pages::index');
$routes->get('/about', 'Pages::about');
$routes->get('/tasks', 'Tasks::index');
$routes->get('/tasks/new', 'Tasks::new');
$routes->post('/tasks', 'Tasks::create', ['filter' => 'csrf']);
$routes->get('/tasks/(:num)/edit', 'Tasks::edit/$1');
$routes->post('/tasks/(:num)', 'Tasks::update/$1', ['filter' => 'csrf']);
$routes->post('/tasks/(:num)/delete', 'Tasks::delete/$1', ['filter' => 'csrf']);
$routes->get('/profile', 'Profile::index');
$routes->get('/customers', 'Customers::index');
$routes->get('/customers/new', 'Customers::new');
$routes->post('/customers', 'Customers::create', ['filter' => 'csrf']);
$routes->get('/customers/(:num)/edit', 'Customers::edit/$1');
$routes->post('/customers/(:num)', 'Customers::update/$1', ['filter' => 'csrf']);
$routes->get('/users', 'Users::index');
$routes->get('/users/new', 'Users::new');
$routes->post('/users', 'Users::create', ['filter' => 'csrf']);
$routes->get('/users/(:num)/edit', 'Users::edit/$1');
$routes->post('/users/(:num)', 'Users::update/$1', ['filter' => 'csrf']);
