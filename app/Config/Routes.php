<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de');
//$routes->get('registrarse', 'Home::registrarse');
//$routes->get('login', 'Home::login');


$routes->get('/registrarse', 'UserController::create');
$routes->post('/enviar_registro', 'UserController::formValidation');

$routes->get('/login', 'LoginController');
$routes->post('/enviar_login', 'LoginController::auth');
$routes->get('/panel', 'PanelController::index', ['filter' => 'auth']);
$routes->get('/logout', 'LoginController::logout');