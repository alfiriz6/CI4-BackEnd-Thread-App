<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'username'  => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'password'  => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'nama'      => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'email'     => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'role'      => [
                'type'              => 'TINYINT',
                'constraint'        => '1',
                'default'           => '1'
            ],
        ]);

        $this->forge->addKey('id', TRUE);

        $this->forge->createTable('user', TRUE);
    }

    //-------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
