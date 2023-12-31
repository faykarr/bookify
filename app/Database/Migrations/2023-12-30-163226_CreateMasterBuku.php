<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMasterBuku extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel master_buku with id_buku like 0001 zero fill
        $this->forge->addField([
            'id_buku' => [
                'type' => 'INT',
                'constraint' => 4,
                'auto_increment' => true,
                'zerofill' => true,
            ],
            'judul_buku' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'isbn' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'pengarang' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'penerbit' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'tahun_terbit' => [
                'type' => 'YEAR',
                'constraint' => 4,
            ],
            'stok_buku' => [
                'type' => 'INT',
                'constraint' => 3,
            ],
            'deskripsi' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'rak' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'gambar' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_buku', true);
        // isbn unique
        $this->forge->addUniqueKey('isbn');
        $this->forge->createTable('master_buku');
    }

    public function down()
    {
        // menghapus tabel master_buku
        $this->forge->dropTable('master_buku');
    }
}
