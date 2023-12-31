<?php

namespace App\Models;

use CodeIgniter\Model;

class PeminjamanModel extends Model
{
    protected $table            = 'peminjaman';
    protected $primaryKey       = 'id_peminjaman';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = ['id_buku', 'id_anggota', 'tgl_pinjam', 'jatuh_tempo', 'tgl_kembali', 'status'];

    // Get All Peminjaman with Join
    public function getAllPeminjaman()
    {
        return $this->db->table('peminjaman')
            ->join('master_buku', 'master_buku.id_buku = peminjaman.id_buku')
            ->join('master_anggota', 'master_anggota.id_anggota = peminjaman.id_anggota')
            ->get()->getResultArray();
    }
}
