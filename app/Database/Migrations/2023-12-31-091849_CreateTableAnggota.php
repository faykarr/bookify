<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableAnggota extends Migration
{
    public function up()
    {
        // Tabel anggota
        $this->forge->addField([
            'id_anggota' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true, // agar nilainya positif
                'zerofill' => true, // agar nilainya positif
                'auto_increment' => true,
            ],
            'nim' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'alamat' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'no_telp' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => true,
            ],
            'foto' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'id_user' => [
                'type' => 'INT',
                'unsigned' => true, // agar nilainya positif
                'constraint' => 11,
            ],
        ]);
        $this->forge->addKey('id_anggota', true);
        $this->forge->addUniqueKey('nim');
        $this->forge->addForeignKey('id_user', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('master_anggota');
    }

    public function down()
    {
        // Hapus tabel anggota
        $this->forge->dropTable('master_anggota');
    }
}
