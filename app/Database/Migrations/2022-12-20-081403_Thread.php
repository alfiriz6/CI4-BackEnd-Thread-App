<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Thread extends Migration
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
            'judul'     => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'gambar'       => [
                'type'              => 'TEXT'
            ],
            'isi'       => [
                'type'              => 'TEXT'
            ],
            'tanggal'   => [
                'type'              => 'DATETIME'
            ],
        ]);

        $this->forge->addKey('id', TRUE);

        $this->forge->createTable('thread', TRUE);
    }

    //-------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('thread');
    }
}
