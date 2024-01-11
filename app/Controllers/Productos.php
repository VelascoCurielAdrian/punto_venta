<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Productos extends BaseController
{
    public function index()
    {
        $data['contenido'] = view('productos');
        return view('dashboard', $data);
    }
}
