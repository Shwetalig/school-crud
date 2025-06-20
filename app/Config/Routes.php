<?php

use CodeIgniter\Router\RouteCollection;
use App\Modules\Schools\Controllers\SchoolController;

/**
 * @var RouteCollection $routes
 */


$routes->group('schools', function($routes) {
    $routes->get('/', [SchoolController::class, 'index']);
    $routes->get('create', [SchoolController::class, 'create']);
    $routes->post('store', [SchoolController::class, 'store']);
    $routes->get('edit/(:num)', [SchoolController::class, 'edit/$1']);
    $routes->post('update/(:num)', [SchoolController::class, 'update/$1']);
    $routes->get('delete/(:num)', [SchoolController::class, 'delete/$1']);
});

