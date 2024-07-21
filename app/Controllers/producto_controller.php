<?php

namespace App\Controllers;

use App\Models\producto_model;
use CodeIgniter\Controller;

class producto_controller extends Controller
{
    public function productos_admin()
    {
            $data['titulo'] = 'Administrar Productos';
            echo view('common/head', $data);
            echo view('common/navbar');
            echo view('backend/admin/productos');
            echo view('common/footer');
            echo view('common/scripts');
    }

}