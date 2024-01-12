<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoriaProductoModel extends Model
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
	protected $validationRules = [
		'nombre' => 'required|regex_match[/^[a-zA-Z\s]+$/]|max_length[50]',
		'descripcion' => 'required|regex_match[/^[a-zA-Z\s]+$/]|max_length[50]',
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
	];

	protected $skipValidation = false;
	protected $cleanValidationRules = true;


	public function categoriasActivas()
	{
		$this->select('id, nombre, descripcion, estatus');
		$this->where('activo', true);

		return $this->findAll();
	}

	public function categoriaProductoByID($categoria_id)
	{
		$query = $this->db->query('SELECT * FROM consultar_categoria(?)', array($categoria_id));

		return $query->getRow();
	}

	public function crearCategoria($nombre, $descripcion)
	{
		$query = $this->db->query('SELECT crear_categoria(?, ?) as nuevo_id', array($nombre, $descripcion));
		$resultado = $query->getRow();

		if ($resultado && isset($resultado->nuevo_id)) {
			return $resultado->nuevo_id;
		} else {
			return ['error' => 'Error al crear la categoria.'];
		}
	}

	public function actualizarCategoria($nombre, $descripcion, $categoria_id, $estatus)
	{
		
		$query = $this->db->query('SELECT actualizar_categoria(?, ?, ?, ?) as resultado', array($nombre, $descripcion, $categoria_id, $estatus));
		$resultado = $query->getRow();

		if ($resultado && isset($resultado->resultado)) {
			return $resultado->resultado;
		} else {
			return ['error' => 'Error al actualizar la categoria.'];
		}
	}
	public function eliminarCategoria($categoria_id)
	{
		$query = $this->db->query('SELECT eliminar_categoria(?, ?, ?, ?) as resultado', array($categoria_id));
		$resultado = $query->getRow();

		if ($resultado && isset($resultado->resultado)) {
			return $resultado->resultado;
		} else {
			return ['error' => 'Error al eliminar la categoria.'];
		}
	}
}
