<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoriaProductoModelo extends Model
{
    protected $table = 'categoria_producto';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id',
        'nombre',
        'descripcion',
        'estatus',
        'activo',
    ];

    public function categoriasActivas()
    {
        //Atributos
        $this->select('id, nombre, descripcion, estatus');

        //Condición
        $this->where('activo', true);

        return $this->findAll();
    }
}
