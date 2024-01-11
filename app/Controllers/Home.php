<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['contenido'] = view('inicio');
        return view('dashboard', $data);
    }
}
