<?php

namespace App\Controllers;

use App\Libraries\Tabla;
use App\Models\CategoriaProductoModelo;
use CodeIgniter\RESTful\ResourceController;
use Hermawan\DataTables\DataTable;

class CategoriaProductos extends ResourceController
{

    public function index(): string
    {
        $header = ['ID', 'Nombre', 'Descripción', 'Estatus'];

        $categoriaProductoModel = new CategoriaProductoModelo();


        $resultado = $categoriaProductoModel->categoriasActivas();

        // Instanciar la clase TablaReutilizable
        $componenteTabla = new Tabla();

        // Generar la tabla HTML
        $tablaHTML = $componenteTabla->generarTabla($header, $resultado);
        $data = [
            'contenido' => view('categoria_productos', ['tablaHTML' => $tablaHTML]),
            'ruta' => 'Categoria de productos'
        ];
        return view('dashboard', $data);
    }
}
