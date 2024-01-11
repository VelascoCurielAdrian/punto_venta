<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CategoriaProductos extends BaseController
{
    public function index(): string
    {
        $data['contenido'] = view('categoria_productos');
        return view('dashboard', $data);
    }
}
