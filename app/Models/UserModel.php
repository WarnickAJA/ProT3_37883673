<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "usuarios";
    protected $primaryKey = "id_usuario";
    protected $allowedFields = ["nombre","apellido","usuario","email","password",
    "perfil_id","baja"];

    public function getUsuarios(){
        return $this->findAll();
    }

    public function getUserId($id)
    {
        return $this->where('id_usuario', $id)->first();
    }
}
