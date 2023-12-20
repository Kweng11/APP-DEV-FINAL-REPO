<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/save', 'Forms::save');
$routes->post('/del', 'Forms::del');
$routes->get('/GetData', 'Forms::GetData');
