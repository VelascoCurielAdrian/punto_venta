<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductoModel extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id',
        'nombre',
        'descripcion',
        'precio',
        'categoria_id',
        'estatus',
        'activo',
    ];
    protected $validationRules = [
        'nombre' => 'required|regex_match[/^[a-zA-Z\s]+$/]|max_length[50]',
        'descripcion' => 'required|regex_match[/^[a-zA-Z\s]+$/]|max_length[50]',
        'precio' => 'required|decimal',
        'categoria_id' => 'required|integer',
    ];

    protected $validationMessages = [
        'nombre' => [
            'required' => 'El campo de nombre es obligatorio.',
            'regex_match' => 'El campo de nombre solo debe contener letras y espacios.',
            'max_length' => 'El campo de nombre no debe tener más de 50 caracteres.',
        ],
        'descripcion' => [
            'required' => 'El campo de descripción es obligatorio.',
            'regex_match' => 'El campo de descripción solo debe contener letras y espacios.',
            'max_length' => 'El campo de descripción no debe tener más de 50 caracteres.',
        ],
        'precio' => [
            'required' => 'El campo de precio es obligatorio.',
            'decimal' => 'El campo de precio debe ser un número decimal.',
        ],
        'categoria_id' => [
            'required' => 'El campo de categoria es obligatorio.',
            'decimal' => 'El campo de categoria debe ser un número entero.',
        ],
    ];
    
    protected $skipValidation = false;
    protected $cleanValidationRules = true;


    public function obtenerPruductosActivos()
    {
        $this->select('id, nombre, descripcion, estatus');
        $this->where('activo', true);

        return $this->findAll();
    }

    public function obtenerPruductoBYID($id)
    {
        $query = $this->db->query('SELECT * FROM productos(?)', array($id));
        return $query->getRow();
    }

    public function crearProducto($nombre, $descripcion)
    {
        $query = $this->db->query('SELECT crear_producto(?, ?) as nuevo_id', array($nombre, $descripcion));
        $resultado = $query->getRow();

        if ($resultado && isset($resultado->nuevo_id)) {
            return $resultado->nuevo_id;
        } else {
            return ['error' => 'Error al crea el producto.'];
        }
    }

    public function actulizarProducto($nombre, $descripcion, $precio, $categoria_id, $estatus, $id)
    {

        $query = $this->db->query('SELECT actualizar_producto(?, ?, ?, ?) as resultado', array($nombre, $descripcion, $categoria_id, $estatus, $id));
        $resultado = $query->getRow();

        if ($resultado && isset($resultado->resultado)) {
            return $resultado->resultado;
        } else {
            return ['error' => 'Error al actualizar el producto.'];
        }
    }
    public function eliminarProducto($id)
    {
        $query = $this->db->query('SELECT eliminar_producto(?) as resultado', array($id));
        $resultado = $query->getRow();

        if ($resultado && isset($resultado->resultado)) {
            return $resultado->resultado;
        } else {
            return ['error' => 'Error al eliminar el producto.'];
        }
    }
}