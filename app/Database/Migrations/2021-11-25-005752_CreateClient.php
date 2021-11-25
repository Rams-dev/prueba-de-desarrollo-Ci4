<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateClient extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'varchar',
                'constraint' => 80
            ],
            "lastname" => [
                'type' => 'varchar',
                'constraint' => 80
            ],
            "mothers_lastname" => [
                'type' => 'varchar',
                'constraint' => 80
            ],
            "birthday" => [
                'type' => 'date',
            ],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('clients');
    }

    public function down()
    {
        //
        $this->forge->dropTable('clients');
    }
}
