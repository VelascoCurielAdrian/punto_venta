<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Tabla;

class Productos extends BaseController
{
    public function index()
    {

        $header = ['Nombre', 'Descripción', 'Precio', 'Categoria', 'Estatus'];
        $rows = [
            ['Producto 1', 'Descripción del Producto 1', 19.99, 'Electrónica', 'Disponible'],
            ['Producto 2', 'Descripción del Producto 2', 29.99, 'Ropa', 'Agotado'],
            ['Producto 3', 'Descripción del Producto 3', 39.99, 'Hogar', 'Disponible'],
        ];

        // Instanciar la clase TablaReutilizable
        $tablaReutilizable = new Tabla();

        // Generar la tabla HTML
        $tablaHTML = $tablaReutilizable->generarTabla($header, $rows);

        $data = [
            'contenido' => view('productos', ['tablaHTML' => $tablaHTML]),
            'ruta' => 'Productos'
        ];

        return view('dashboard', $data);
    }
}
