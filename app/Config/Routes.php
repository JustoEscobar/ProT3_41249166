<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
/*Rutas relacionadas al frontend*/
$routes->get('/', 'Home::index');
$routes->get('inicio', 'Home::index');
$routes->get('principal', 'Home::principal');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('productos', 'Home::productos');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');

/*Rutas Backend/Usuario para el Registro*/
$routes->get('/registro', 'usuario_controller::create');
$routes->post('/enviar-form', 'usuario_controller::formValidation'); 

/*Rutas Backend/Usuario para el Login*/
$routes->get('/login', 'login_controller');
$routes->post('/enviarLogin', 'login_controller::auth');
$routes->get('/panel', 'panel_controller::index',['filter'=>'auth']);
$routes->get('/logout', 'login_controller::logout');

/*Ruta Backend/Usuario para ver Mis Datos*/
$routes->get('datos_usuario', 'usuario_controller::edit');
$routes->post('actualizar_datos/(:num)', 'usuario_controller::update/$1');

/*Rutas Backend/Administrador(Alta-Baja-Modificacion) de Usuarios*/
$routes->get('usuarios', 'usuario_controller::usuarios_registrados');
$routes->get('modificar_usuario/(:num)', 'usuario_controller::editAdmin/$1');
$routes->post('actualizar_usuario/(:num)', 'usuario_controller::updateAdmin/$1');

/*Falta hacer*/
$routes->get('alta_usuario', 'usuario_controller:: ');
$routes->get('baja_usuario', 'usuario_controller:: ');

/*Muestra todas las consultas del formulario Contacto*/
$routes->get('consultas', 'Home::consultas');

/*Rutas Backend/Administrador(Alta-Baja-Modificacion) de Productos*/
$routes->get('#', 'producto_controller:: ');
$routes->get('alta_producto', 'producto_controller:: ');
$routes->get('baja_producto', 'producto_controller:: ');
$routes->get('modificar_producto', 'producto_controller:: ');