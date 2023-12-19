<?php

use App\Controllers\Super\HomeController;
use App\Controllers\Super\UnitsController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('super', static function ($routes){  
    $routes->get('/', [HomeController::class, 'index'], ['as' => 'super.home']);

    $routes->group('units', static function ($routes){
        $routes->get('/', [UnitsController::class, 'index'], ['as' => 'units']);
    });
});

