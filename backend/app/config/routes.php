<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/save', 'Forms::save');
$routes->post('/del', 'Forms::del');
$routes->get('/GetData', 'Forms::GetData');

$routes->get('/LGULogin', 'LoginUser::LGULogin');
$routes->get('/LGURegisterview', 'LoginUser::LGURegisterview');
$routes->get('/LGURegister', 'LoginUser::LGURegister');
$routes->post('loginauth', 'LoginUser::loginauth');
$routes->post('/create', 'LoginUser::LGURegister');
$routes->get('logout', 'LoginUser::logout');