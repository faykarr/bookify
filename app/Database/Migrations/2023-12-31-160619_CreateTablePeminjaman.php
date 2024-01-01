<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTablePeminjaman extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_peminjaman' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'id_buku' => [
                'type' => 'INT',
                'unsigned' => true, //agar nilainya tidak bisa negatif
                'zerofill' => true, //agar nilainya tidak bisa negatif
                'constraint' => 4,
            ],
            'id_anggota' => [
                'type' => 'INT',
                'unsigned' => true, //agar nilainya tidak bisa negatif
                'zerofill' => true, //agar nilainya tidak bisa negatif
                'constraint' => 4,
            ],
            'tgl_pinjam' => [
                'type' => 'DATE',
            ],
            'jatuh_tempo' => [
                'type' => 'DATE',
            ],
            'tgl_kembali' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['Pending', 'Ditolak', 'Disetujui', 'Sudah Kembali'],
            ],
        ]);
        $this->forge->addKey('id_peminjaman', true);
        $this->forge->addForeignKey('id_buku', 'buku', 'id_buku', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_anggota', 'anggota', 'id_anggota', 'CASCADE', 'CASCADE');
        $this->forge->createTable('peminjaman');
    }

    public function down()
    {
        $this->forge->dropTable('peminjaman');
    }
}
