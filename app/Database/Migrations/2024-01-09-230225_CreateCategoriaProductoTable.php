<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCategoriaProductoTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'descripcion' => [
                'type' => 'VARCHAR',
                'constraint' => 250,
            ],
            'estatus' => [
                'type' => 'BOOLEAN',
                'default' => true,
            ],
            'activo' => [
                'type' => 'BOOLEAN',
                'default' => true,
            ],
            'fechaRegistro' => [
                'type' => 'TIMESTAMP',
                'null' => false,
                'default' => 'CURRENT_TIMESTAMP',
            ],
            'fechaModificacion' => [
                'type' => 'TIMESTAMP',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('categoria_productos');
    }

    public function down()
    {
        $this->forge->dropTable('categoria_producto');
    }
}
