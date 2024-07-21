<?php

namespace App\Controllers;

use App\Models\consulta_model;
use CodeIgniter\Controller;

class consulta_controller extends Controller
{
    public function consultas()
    {
            $data['titulo'] = 'Administrar Consultas';
            echo view('common/head', $data);
            echo view('common/navbar');
            echo view('backend/admin/consultas');
            echo view('common/footer');
            echo view('common/scripts');
    }

}