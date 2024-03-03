<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

use App\Controllers\News;
use App\Controllers\Pages;
use App\Controllers\Guests;

$routes->get('guests', [Guests::class, 'index']);   
$routes->get('guests/(:segment)', [Guests::class, 'show']);
$routes->get('guests/new', [Guests::class, 'new']); // Add this line
$routes->post('guests', [Guests::class, 'create']);

$routes->get('news', [News::class, 'index']);   
$routes->get('news/new', [News::class, 'new']); // Add this line
$routes->post('news', [News::class, 'create']);         
$routes->get('news/(:segment)', [News::class, 'show']); 

$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);
