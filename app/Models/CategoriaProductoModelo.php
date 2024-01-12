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
	protected $validationRules = [
		'nombre' => 'required|alpha',
		'descripcion' => 'required|alpha',
	];

	protected $validationMessages = [
		'nombre' => [
			'required' => 'El campo de nombre es obligatorio.',
			'alpha' => 'El campo de nombre debe contener solo caracteres alfabéticos.',
		],
		'descripcion' => [
			'required' => 'El campo de descripción es obligatorio.',
			'alpha' => 'El campo de descripción debe contener solo caracteres alfabéticos.',
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
		if (!$this->validate(['nombre' => $nombre, 'descripcion' => $descripcion])) {
			return ['error' => $this->validator->getErrors()];
		}

		$query = $this->db->query('SELECT crear_categoria(?, ?) as nuevo_id', array($nombre, $descripcion));
		$resultado = $query->getRow();

		if ($resultado && isset($resultado->nuevo_id)) {
			return $resultado->nuevo_id;
		} else {
			return ['error' => 'Error creating category.'];
		}
	}

	public function actualizarCategoria($nombre, $descripcion, $categoria_id, $estatus)
	{
		if (!$this->validate(['nombre' => $nombre, 'descripcion' => $descripcion])) {
			return ['error' => $this->validator->getErrors()];
		}

		$query = $this->db->query('SELECT actualizar_categoria(?, ?, ?, ?) as resultado', array($nombre, $descripcion, $categoria_id, $estatus));
		$resultado = $query->getRow();

		if ($resultado && isset($resultado->resultado)) {
			return $resultado->resultado;
		} else {
			return ['error' => 'Error updating category.'];
		}
	}
}
