<?php

namespace App\Controllers;

use App\Helpers\ResponseHelper;
use App\Helpers\Messages;

use App\Models\CategoriaProductoModel;
use CodeIgniter\RESTful\ResourceController;

class CategoriaProductoController extends ResourceController
{
	public function index()
	{
		try {
			$categoriaProductoModel = new CategoriaProductoModel();
			$resultado = $categoriaProductoModel->categoriasActivas();
			return $this->respond(ResponseHelper::success(200, $resultado, Messages::SUCCESS, ));
		} catch (\Exception $e) {
			$errorMessage = $e->getMessage();
			return $this->respond(ResponseHelper::error(501, $errorMessage || Messages::ERROR));
		}
	}

	public function show($id = null)
	{
		try {
			if ($id === null) {
				return $this->respond(ResponseHelper::error(404, 'Se requiere un ID para esta operación.'));
			}

			$categoriaProductoModel = new CategoriaProductoModel();
			$categoria = $categoriaProductoModel->categoriaProductoByID($id);

			if ($categoria === null) {
				return $this->respond(ResponseHelper::error(404, 'No se encontró la categoría para el ID: $id'));
			}

			return $this->respond(ResponseHelper::success(200, $categoria, Messages::SUCCESS));
		} catch (\Exception $e) {
			$errorMessage = $e->getMessage();
			return $this->respond(ResponseHelper::error(501, $errorMessage));
		}
	}

	public function create()
	{
		try {
			$body = $this->request->getJSON();
			$nombre = $body->nombre;
			$descripcion = $body->descripcion;

			$categoriaProductoModel = new CategoriaProductoModel();
			$validationResult = $categoriaProductoModel->validate(['nombre' => $nombre, 'descripcion' => $descripcion]);

			if (!$validationResult) {
				return $this->respond(ResponseHelper::error(400, $categoriaProductoModel->errors()));
			}

			$nuevoId = $categoriaProductoModel->crearCategoria($nombre, $descripcion);
			return $this->respond(ResponseHelper::success(201, $nuevoId, Messages::SUCCESS));
		} catch (\Exception $e) {
			$errorMessage = $e->getMessage();
			return $this->respond(ResponseHelper::error(500, $errorMessage));
		}
	}

	public function update($id = null)
	{
		try {
			$categoriaProductoModel = new CategoriaProductoModel();

			$body = $this->request->getJSON();
			$nombre = $body->nombre;
			$descripcion = $body->descripcion;
			$estatus = $body->estatus;

			$categoria = $categoriaProductoModel->categoriaProductoByID($id);

			if ($categoria === null) {
				return $this->respond(ResponseHelper::error(404, 'No se encontró la categoría para el ID: ' . $id));
			}

			$validationResult = $categoriaProductoModel->validate(['nombre' => $nombre, 'descripcion' => $descripcion]);

			if (!$validationResult) {
				return $this->respond(ResponseHelper::error(400, $categoriaProductoModel->errors()));
			}

			$categoriaProductoModel->actualizarCategoria($nombre, $descripcion, $id, $estatus);
			return $this->respond(ResponseHelper::success(200, $body, Messages::SUCCESS));

		} catch (\Exception $e) {
			$errorMessage = $e->getMessage();
			return $this->respond(ResponseHelper::error(500, $errorMessage));
		}
	}

	public function destroy($id = null)
	{
		try {
			$categoriaProductoModel = new CategoriaProductoModel();
			$categoria = $categoriaProductoModel->categoriaProductoByID($id);

			if ($categoria === null) {
				return $this->respond(ResponseHelper::error(404, 'No se encontró la categoría para el ID: ' . $id));
			}

			$categoriaProductoModel->eliminarCategoria($id);
			return $this->respond(ResponseHelper::success(200, ['deleted' => true], Messages::SUCCESS));
		} catch (\Exception $e) {
			$errorMessage = $e->getMessage();
			return $this->respond(ResponseHelper::error(500, $errorMessage));
		}
	}

}
