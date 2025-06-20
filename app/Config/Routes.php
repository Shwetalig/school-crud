<?php

use CodeIgniter\Router\RouteCollection;
use App\Modules\Schools\Controllers\SchoolController;
use App\Modules\Notes\Controllers\NoteController;
use App\Modules\Students\Controllers\StudentController;


/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');



$routes->group('schools', function($routes) {
    $routes->get('/', [SchoolController::class, 'index']);
    $routes->get('create', [SchoolController::class, 'create']);
    $routes->post('store', [SchoolController::class, 'store']);
    $routes->get('edit/(:num)', [SchoolController::class, 'edit/$1']);
    $routes->post('update/(:num)', [SchoolController::class, 'update/$1']);
    $routes->get('delete/(:num)', [SchoolController::class, 'delete/$1']);
});



$routes->group('students', function($routes) {
    $routes->get('/', [StudentController::class, 'index']);
    $routes->get('create', [StudentController::class, 'create']);
    $routes->post('store', [StudentController::class, 'store']);
});




$routes->group('notes', function ($routes) {
    $routes->get('(:num)', [NoteController::class, 'index']);
    $routes->get('create/(:num)', [NoteController::class, 'create']);
    $routes->post('store/(:num)', [NoteController::class, 'store']);
});
