<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index(){
                $data['titulo'] = 'Coffe House';
                echo view('common/head', $data);
                echo view('common/navbar');
                echo view('frontend/inicio');
                echo view('common/scripts');
	}

        public function principal(){
                $data['titulo'] = 'Principal';
                echo view('common/head', $data);
                echo view('common/navbar');
                echo view('frontend/principal');
                echo view('common/footer');
                echo view('common/scripts');
        }

	public function quienes_somos(){
                $data['titulo'] = 'Quienes Somos';
                echo view('common/head', $data);
                echo view('common/navbar');
                echo view('frontend/quienes_somos');
                echo view('common/footer');
                echo view('common/scripts');
        }

        public function acerca_de(){
                $data['titulo'] = 'Acerca De';
                echo view('common/head', $data);
                echo view('common/navbar');
                echo view('frontend/acerca_de');
                echo view('common/footer');
                echo view('common/scripts');
        }

        public function productos(){
                $data['titulo'] = 'Productos';
                echo view('common/head', $data);
                echo view('common/navbar');
                echo view('frontend/productos');
                echo view('common/footer');
                echo view('common/scripts');
        }

        public function registro(){
                $data['titulo'] = 'Registro';
                echo view('common/head', $data);
                echo view('common/navbar');
                echo view('backend/usuario/registro');
                echo view('common/scripts');
        }

        public function login(){
                $data['titulo'] = 'Login';
                echo view('common/head', $data);
                echo view('common/navbar');
                echo view('backend/usuario/login');
                echo view('common/scripts');
        }
}
