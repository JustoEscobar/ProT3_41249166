<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('inicio', 'Home::index');
$routes->get('principal', 'Home::principal');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('productos', 'Home::productos');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');

/*Rutas del Registro de Usuarios*/
$routes->get('/registro', 'usuario_controller::create');
$routes->post('/enviar-form', 'usuario_controller::formValidation'); 

/*Rutas para el Login*/
$routes->get('/login', 'login_controller');
$routes->post('/enviarLogin', 'login_controller::auth');
$routes->get('/panel', 'panel_controller::index',['filter'=>'auth']);
$routes->get('/logout', 'login_controller::logout');