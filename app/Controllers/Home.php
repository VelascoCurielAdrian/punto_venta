<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'contenido' => view('Home'),
            'ruta' => 'Inicio'
        ];
        return view('Dashboard', $data);
    }
}
