<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/save', 'Forms::save');
$routes->post('/save2', 'Forms::save2');
$routes->post('/save3', 'Forms::save3');
$routes->post('/save4', 'Forms::save4');
$routes->get('/GetData', 'Forms::GetData');
$routes->get('/GetData2', 'Forms::GetData2');
$routes->get('/GetData3', 'Forms::GetData3');
$routes->get('/GetData4', 'Forms::GetData4');