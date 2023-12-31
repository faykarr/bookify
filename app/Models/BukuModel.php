<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table            = 'master_buku';
    protected $primaryKey       = 'id_buku';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = ['judul_buku', 'isbn', 'pengarang', 'penerbit', 'tahun_terbit', 'stok_buku', 'deskripsi', 'rak', 'gambar'];
}
