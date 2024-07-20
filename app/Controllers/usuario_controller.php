<?php

namespace App\Controllers;

use App\Models\usuario_model;
use CodeIgniter\Controller;

class usuario_controller extends Controller
{
    protected $usuario_model;
    public function __construct()
    {
        helper(['form', 'url']);
        $this->usuario_model = new usuario_model();
    }

    private function getValidationMessages()
    {
        return [
            'nombre' => [
                'required' => 'Nombre es obligatorio.',
                'min_length' => 'Debe tener al menos 3 caracteres.',
                'regex_match' => 'Solo puede contener letras',
            ],
            'apellido' => [
                'required' => 'Apellido es obligatorio.',
                'min_length' => 'Debe tener al menos 3 caracteres.',
                'regex_match' => 'Solo puede contener letras',
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
    }

    private function getValidationRules($id_usuario = null)
    {
        return [
            'nombre' => 'required|min_length[3]|regex_match[/^[a-zA-Z\s]+$/]',
            'apellido' => 'required|min_length[3]|regex_match[/^[a-zA-Z\s]+$/]',
            'usuario' => 'required|min_length[3]|alpha_numeric',
            'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuario.email' . ($id_usuario ? ',id,' . $id_usuario : '') . ']',
            'password' => 'required|min_length[8]|max_length[16]|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&#])[A-Za-z\d@$!%*?&#]+$/]'
        ];
    }

    public function create()
    {
        $dato['titulo'] = 'Registro';
        echo view('common/head', $dato);
        echo view('common/navbar');
        echo view('backend/usuario/registro');
        echo view('common/scripts');
    }

    public function formValidation()
    {
        $validation = \Config\Services::validation();
        $input = $this->validate($this->getValidationRules(), $this->getValidationMessages());

        $formModel = new usuario_model();
        if (!$input) {
            $data['titulo'] = 'Registro';
            echo view('common/head', $data);
            echo view('common/navbar');
            echo view('backend/usuario/registro', ['validation' => $this->validator]);
            echo view('common/scripts');
        } else {
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ]);
            session()->setFlashdata('success', 'Usuario registrado con éxito');
            return $this->response->redirect('registro');
        }
    }

    public function usuarios_registrados()
    {
        if ($this->isLoggedIn()) {
            $sessionData = session()->get('logged_in');


            if (!is_array($sessionData)) {
                $sessionData = [];
            }

            $data = [
                'titulo' => 'Usuarios',
                'perfil_id' => $sessionData['perfil_id'] ?? 'No disponible',
                'nombre' => $sessionData['nombre'] ?? 'No disponible',
                'baja' => $sessionData['baja'] ?? 'No disponible',
                'usuarios' => $this->usuario_model->getUsuariosNoElim()
            ];

            echo view('common/head', $data);
            echo view('common/navbar');
            echo view('backend/admin/usuarios', $data);
            echo view('common/footer');
            echo view('common/scripts');
        } else {
            return redirect()->to('login');
        }
    }

    private function isLoggedIn()
    {
        return session()->has('logged_in') && session()->get('logged_in') !== false;
    }

    public function edit()
    {
        $model = new usuario_model();
        $validation = \Config\Services::validation();

        $id_usuario = session()->get('id_usuario');

        $data['usuario'] = $model->getUserId($id_usuario);
        $data['titulo'] = 'Mis Datos';
        $data['validation'] = $validation;

        echo view('common/head', $data);
        echo view('common/navbar');
        echo view('backend/usuario/datos_usuario', $data);
        echo view('common/scripts');
    }

    public function update($id_usuario)
    {
        $validation = \Config\Services::validation();

        $rules = [
            'nombre' => 'required|min_length[3]|regex_match[/^[a-zA-Z\s]+$/]',
            'apellido' => 'required|min_length[3]|regex_match[/^[a-zA-Z\s]+$/]',
            'usuario' => 'required|min_length[3]|alpha_numeric',
            'email' => 'required|min_length[4]|max_length[100]|valid_email' . ($id_usuario ? '|is_unique[usuario.email,id_usuario,' . $id_usuario . ']' : ''),
            'password' => 'permit_empty|min_length[8]|max_length[16]|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&#])[A-Za-z\d@$!%*?&#]+$/]'
        ];
        if (!$this->validate($rules, $this->getValidationMessages())) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        } else {
            $userModel = new usuario_model();
            $data = [
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email')
            ];

            if ($this->request->getVar('password')) {
                $data['password'] = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
            }

            $userModel->update($id_usuario, $data);

            session()->setFlashdata('success', 'Datos actualizados con éxito');
            return redirect()->to(base_url('datos_usuario'));
        }
    }

    public function editAdmin($id_usuario)
    {
        $model = new usuario_model();
        $validation = \Config\Services::validation();

        $data['usuario'] = $model->getUserId($id_usuario);
        $data['titulo'] = 'Modificar Usuario';
        $data['validation'] = $validation;

        echo view('common/head', $data);
        echo view('common/navbar');
        echo view('backend/admin/modificar_usuario', $data);
        echo view('common/scripts');
    }

    public function updateAdmin($id_usuario)
    {
        $validation = \Config\Services::validation();

        $rules = [
            'nombre' => 'required|min_length[3]|regex_match[/^[a-zA-Z\s]+$/]',
            'apellido' => 'required|min_length[3]|regex_match[/^[a-zA-Z\s]+$/]',
            'usuario' => 'required|min_length[3]|alpha_numeric',
            'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuario.email,id_usuario,' . $id_usuario . ']'
        ];

        if (!$this->validate($rules, $this->getValidationMessages())) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        } else {
            $userModel = new usuario_model();
            $data = [
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email')
            ];

            if ($this->request->getVar('password')) {
                $data['password'] = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
            }

            if ($userModel->update($id_usuario, $data)) {
                session()->setFlashdata('success', 'Datos actualizados con éxito');
            } else {
                session()->setFlashdata('fail', 'Error al actualizar los datos');
            }

            return redirect()->to(base_url("modificar_usuario/" . $id_usuario));
        }
    }

    public function baja_logica_usuario($id_usuario)
    {
        $userModel = new usuario_model();
        $data = ['baja' => 'SI'];

        if ($userModel->update($id_usuario, $data)) {
            return redirect()->to(base_url('usuarios'))->with('success', 'Usuario dado de baja exitosamente.');
        } else {
            return redirect()->to(base_url('usuarios'))->with('fail', 'No se pudo dar de baja al usuario.');
        }
    }

    public function usuarios_eliminados()
    {
        if ($this->isLoggedIn()) {
            $sessionData = session()->get('logged_in');

            if (!is_array($sessionData)) {
                $sessionData = [];
            }

            $data = [
                'titulo' => 'Usuarios Eliminados',
                'perfil_id' => $sessionData['perfil_id'] ?? 'No disponible',
                'nombre' => $sessionData['nombre'] ?? 'No disponible',
                'baja' => $sessionData['baja'] ?? 'No disponible',
                'usuarios' => $this->usuario_model->getUsuariosElim()
            ];

            echo view('common/head', $data);
            echo view('common/navbar');
            echo view('backend/admin/usuarios_eliminados', $data);
            echo view('common/footer');
            echo view('common/scripts');
        } else {
            return redirect()->to('login');
        }
    }

    public function activar_usuario($id_usuario)
    {
        $userModel = new usuario_model();
        $data = ['baja' => 'NO'];

        if ($userModel->update($id_usuario, $data)) {
            return redirect()->to(base_url('usuarios'))->with('success', 'Usuario dado de baja exitosamente.');
        } else {
            return redirect()->to(base_url('usuarios'))->with('fail', 'No se pudo dar de baja al usuario.');
        }
    }
}
