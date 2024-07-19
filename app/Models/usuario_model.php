<?php

namespace App\Models;

use CodeIgniter\Model;

class usuario_model extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['nombre', 'apellido', 'usuario', 'email', 'password', 'perfil_id', 'baja', 'created_at'];

    public function getUsuarios()
    {
        $builder = $this->builder();
        $query = $builder->get();

        if ($query->getNumRows() > 0) {
            return $query->getResult();
        } else {
            return false;
        }
    }

    public function getUsuariosNoElim()
    {
        return $this->where('baja', 'NO')->findAll();
    }

    public function getUserId($id_usuario)
    {
        return $this->where('id_usuario', $id_usuario)->first();
    }

    public function updateUser($id_usuario, $data)
    {
        return $this->update($id_usuario, $data);
    }
}
