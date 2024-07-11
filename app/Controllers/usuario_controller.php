<?php
namespace App\Controllers;
Use App\Models\usuario_model;
Use CodeIgniter\Controller;

class usuario_controller extends Controller{
    public function __construct()
    {
        helper(['form','url']);
    }

    public function create(){
        $dato['titulo'] = 'Registro';
        echo view('common/head', $dato);
        echo view('common/navbar');
        echo view('backend/usuario/registro');
        echo view('common/scripts');
    }

    public function formValidation()
    {
        // Configurar mensajes de error personalizados
        $messages = [
            'nombre' => [
                'required' => 'Nombre es obligatorio.',
                'min_length' => 'Debe tener al menos 3 caracteres.',
                'alpha' => 'Solo puede contener letras',
            ],
            'apellido' => [
                'required' => 'Apellido es obligatorio.',
                'min_length' => 'Debe tener al menos 3 caracteres.',
                'alpha' => 'Solo puede contener letras',
            ],
            'usuario' => [
                'required' => 'Usuario es obligatorio.',
                'min_length' => 'Debe tener al menos 3 caracteres.',
                'alpha_numeric' => 'Debe contener solo letras y números',
            ],
            'email' => [
                'required' => 'Email es obligatorio.',
                'min_length' => 'Debe tener al menos 4 caracteres.',
                'max_length' => 'No debe exceder los 100 caracteres.',
                'valid_email' => 'Por favor ingrese un email válido.',
                'is_unique' => 'Este email ya está registrado.',
            ],
            'password' => [
                'required' => 'Contraseña es obligatoria.',
                'min_length' => 'Debe tener al menos 8 caracteres.',
                'max_length' => 'No debe exceder los 16 caracteres.',
                'regex_match' => 'Minúscula, mayúscula, número y carácter especial.',
            ],
        ];

        $validation = \Config\Services::validation();

        $input = $this->validate([
            'nombre' => 'required|min_length[3]|alpha',
            'apellido' => 'required|min_length[3]|alpha',
            'usuario' => 'required|min_length[3]|alpha_numeric',
            'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuario.email]',
            'password' => 'required|min_length[8]|max_length[16]|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/]',
        ], $messages
        );

        $formModel = new usuario_model();
        if (!$input){
            $data['titulo'] = 'Registro';
            echo view('common/head', $data);
            echo view('common/navbar');
            echo view('backend/usuario/registro', ['validation' =>$this->validator]);
            echo view('common/scripts');
        } else{
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'),PASSWORD_DEFAULT)
            ]);
            session()->setFlashdata('success','Usuario registrado con exito');
            return $this->response->redirect('registro');
        }
    }
}