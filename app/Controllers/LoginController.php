<?php

namespace App\Controllers;

use App\Helpers\Messages;
use App\Helpers\ResponseHelper;
use App\Models\LoginModel;
use CodeIgniter\RESTful\ResourceController;
use Firebase\JWT\JWT;

class LoginController extends ResourceController
{
    public function index()
    {
        //
    }

    public function create()
    {
        try {
            $body = $this->request->getJSON();
            $usuario = $body->usuario;
            $password = $body->password;

            $loginModel = new LoginModel();
            $validationResult = $loginModel->validate(['usuario' => $usuario, 'password' => $password]);

            if (!$validationResult) {
                return $this->respond(ResponseHelper::error(400, $loginModel->errors()));
            }

            $usuarioBD = $loginModel->login($usuario);

            if (!$usuarioBD) {
                return $this->respond(ResponseHelper::error(409, 'El usuario no existe'));
            }

            $verifcar_pasword = password_verify($password, $usuarioBD['password']);
            if (!$verifcar_pasword) {
                return $this->respond(ResponseHelper::error(409, 'Contraseña incorrecta'));
            }

            $key = getenv('JWT_SECRET');
            $iat = time();
            $exp = $iat + 3600;

            $payload = array(
                "iss" => "Issuer of the JWT",
                "aud" => "Audience that the JWT",
                "sub" => "Subject of the JWT",
                "iat" => $iat,
                "exp" => $exp,
                "usuario" => $usuarioBD
            );

            $token = JWT::encode($payload, $key, 'HS256');

            $response = [
                'usuarioBD' => [
                    'usuario'=> $usuarioBD['usuario'],
                    'nombre_completo'=> $usuarioBD['nombre_completo'],
                ],
                'token' => $token
            ];
            return $this->respond(ResponseHelper::success(200, $response, Messages::SUCCESS));
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();
            return $this->respond(ResponseHelper::error(500, $errorMessage));
        }
    }
}
