<?php

namespace App\Controllers;

use App\Helpers\Messages;
use App\Helpers\ResponseHelper;
use App\Models\RegistroModel;
use CodeIgniter\RESTful\ResourceController;

class RegistroController extends ResourceController
{
    public function index()
    {
        //
    }

    public function create()
    {
        try {
            $body = $this->request->getJSON();
            $nombre_completo = $body->nombre_completo;
            $usuario = $body->usuario;
            $password = $body->password;

            $registroModel = new RegistroModel();
            $validationResult = $registroModel->validate(['nombre_completo' => $nombre_completo, 'usuario' => $usuario, 'password' => $password]);

            if (!$validationResult) {
                return $this->respond(ResponseHelper::error(400, $registroModel->errors()));
            }

            $usuarioBD = $registroModel->consultarUsuario($usuario);

            if($usuarioBD) {
                return $this->response
                ->setStatusCode(409)
                ->setJSON(ResponseHelper::error(409, 'El usuario ya existe'));
            }

            $nuevoId = $registroModel->registroUsuario(
                $nombre_completo,
                $usuario,
                password_hash($password, PASSWORD_DEFAULT)
            );
            return $this->respond(ResponseHelper::success(201, $nuevoId, Messages::SUCCESS));
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();
            return $this->respond(ResponseHelper::error(500, $errorMessage));
        }
    }
}
