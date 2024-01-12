<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
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
        'usuario' => 'required|regex_match[/^[a-zA-Z\s]+$/]|max_length[50]',
        'password' => 'required',
    ];

    protected $validationMessages = [
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

    public function login($usuario)
    {
        $this->select('id, nombre_completo, usuario, password');
        $this->where('usuario', $usuario);
        return $this->first();
    }
}
