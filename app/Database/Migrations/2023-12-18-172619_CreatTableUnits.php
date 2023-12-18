<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatTableUnits extends Migration
{
    public function up()
    {
        $this->forge->addField([
        'id' => [
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => true,
            'auto_increment' => true
        ],
        'name' => [
            'type' => 'VARCHAR',
            'constraint' => 70,
           
        ],
        'email' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
        ],
        'phone' => [
            'type' => 'INT',
            'constraint' => 14,
            'comment' => '(99)99999-9999',
            
        ],
        'coordinator' => [
            'type' => 'VARCHAR',
            'constraint' => 14,
            'comment' => 'Coordenador',
        ],
        'address' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
            'comment' => 'Endereço da Unidade',
        ],
        'services' => [
            'type' => 'JSON',
            'null' => true,
            'default' => null,
            'comment' => 'identificadores dos serviços',
        ],
        'starttime' => [
            'type' => 'VARCHAR',
            'constraint' => 14,
            'comment' => 'horário de início do expediente',
        ],
        'endtime' => [
            'type' => 'VARCHAR',
            'constraint' => 14,
            'comment' => 'horário de final do expediente',
        ],
        'servicetime' => [
            'type' => 'VARCHAR',
            'constraint' => 50,
            'comment' => 'tempo necessário para o atendimento',
        ],
        'active' => [
            'type' => 'INT',
            'constraint' => 11,
            'default' => 0,
            'comment' => '0 => Não, 1 => Sim',
        ],
        'created_at' => [
            'type' => 'DATETIME',
            'null' => true,
            'default' => null
        ],
        'updated_at' => [
            'type' => 'DATETIME',
            'null' => true,
            'default' => null
        ],


    ]);
    $this->forge->addKey('id', true);
    $this->forge->addKey('name');
    $this->forge->addKey('email');
    $this->forge->addKey('phone');

    $this->forge->createTable('units');
    }

    public function down()
    {
        $this->forge->dropTable('units');
    }
}
