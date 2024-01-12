<?php

namespace App\Libraries;

class Tabla
{
  public function generarTabla($cabeceros, $data)
  {
    // Verificar si hay datos y cabeceros
    if (empty($data) || empty($cabeceros)) {
      return 'No hay datos para mostrar.';
    }

    // Construir la tabla HTML
    $html = '<table class="w-full min-w-[540px]"><thead><tr>';

    // Agregar cabeceros
    foreach ($cabeceros as $cabecero) {
      $html .= '<th class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tl-md rounded-bl-md">' . htmlspecialchars($cabecero) . '</th>';
    }

    $html .= '</tr></thead><tbody>';

    // Agregar filas de datos
    foreach ($data as $fila) {
      $html .= '<tr>';
      foreach ($fila as $valor) {
        $html .= '<td class="py-2 px-4 border-b border-b-gray-50"><span class="text-[13px] font-medium text-gray-400">' . htmlspecialchars($valor) . '</span></td>';
      }
      $html .= '</tr>';
    }

    $html .= '</tbody></table>';

    return $html;
  }
}

?>