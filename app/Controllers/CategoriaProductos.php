<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Tabla;

class CategoriaProductos extends BaseController
{
    public function index(): string
    {

        $header = ['Nombre', 'Descripción', 'Estatus'];
        $rows = [
            ['Producto 1', 'Descripción del Producto 1', 'Disponible'],
            ['Producto 2', 'Descripción del Producto 2', 'Agotado'],
            ['Producto 3', 'Descripción del Producto 3', 'Disponible'],
        ];

        // Instanciar la clase TablaReutilizable
        $tablaReutilizable = new Tabla();

        // Generar la tabla HTML
        $tablaHTML = $tablaReutilizable->generarTabla($header, $rows);


        $data = [
            'contenido' => view('categoria_productos', ['tablaHTML' => $tablaHTML]),
            'ruta' => 'Categoria de productos'
        ];
        return view('dashboard', $data);
    }
}
