<?php
namespace App\Controllers;
Use CodeIgniter\Controller;

class panel_controller extends Controller{
    
    public function index(){
        $session = session();
        $nombre = $session->get('usuario');
        $perfil = $session->get('perfil_id');

        $data['perfil_id'] = $perfil;

        $dato['titulo'] = 'Panel del Usuario';
        echo view('common/head', $dato);
        echo view('common/navbar');
        echo view('frontend/principal', $data);
        echo view('common/footer');
        echo view('common/scripts');
    }
}