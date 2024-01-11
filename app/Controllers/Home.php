<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'contenido' => view('inicio'),
            'ruta' => 'Inicio'
        ];
        return view('dashboard', $data);
    }
}
