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
$routes->get('baja_usuario/(:num)', 'usuario_controller::baja_logica_usuario/$1');
$routes->get('usuarios_eliminados', 'usuario_controller::usuarios_eliminados');
$routes->get('activar_usuario/(:num)', 'usuario_controller::activar_usuario/$1');
$routes->get('alta_usuario', 'usuario_controller::alta_usuario');
$routes->post('/enviar-form-alta', 'usuario_controller::formValidation_alta');

/*Falta hacer*/
/*Muestra todas las consultas del formulario Contacto*/
$routes->get('consultas', 'consulta_controller::consultas');
/*Rutas Backend/Administrador(Alta-Baja-Modificacion) de Productos*/
$routes->get('productos_admin', 'producto_controller::productos_admin');
$routes->get('alta_producto', 'producto_controller:: ');
$routes->get('baja_producto', 'producto_controller:: ');
$routes->get('modificar_producto', 'producto_controller:: ');