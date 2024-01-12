<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistroModel extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['nombre_completo', 'usuario', 'password'];

    // Validation
    protected $validationRules = [
        'nombre_completo' => 'required|regex_match[/^[a-zA-Z\s]+$/]|max_length[50]',
        'usuario' => 'required|regex_match[/^[a-zA-Z\s]+$/]|max_length[50]',
        'password' => 'required',
    ];

    protected $validationMessages = [
        'nombre_completo' => [
            'required' => 'El campo de nombre es obligatorio.',
            'regex_match' => 'El campo de nombre solo debe contener letras y espacios.',
            'max_length' => 'El campo de nombre no debe tener más de 50 caracteres.',
        ],
        'usuario' => [
            'required' => 'El campo de usuario es obligatorio.',
            'regex_match' => 'El campo de usuario solo debe contener letras y espacios.',
            'max_length' => 'El campo de usuario no debe tener más de 50 caracteres.',
        ],
        'password' => [
            'required' => 'El campo contraseña es obligatorio',
        ]
    ];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    public function registroUsuario($nombre_completo, $usuario, $password)
    {
        $query = $this->db->query('SELECT registro_usuario(?, ?, ?) as nuevo_id', array($nombre_completo, $usuario, $password));
        $resultado = $query->getRow();

        if ($resultado && isset($resultado->nuevo_id)) {
            return $resultado->nuevo_id;
        } else {
            return ['error' => 'Error al registrar el usuario.'];
        }
    }
}
