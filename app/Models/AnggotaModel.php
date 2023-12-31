<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\UserModel;
use CodeIgniter\Events\Events;
use App\Events\BaruAnggotaEvent;

class AnggotaModel extends Model
{
    protected $table = 'master_anggota';
    protected $primaryKey = 'id_anggota';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $protectFields = true;
    protected $allowedFields = ['nim', 'nama', 'alamat', 'no_telp', 'foto', 'id_user'];

    public function insertAnggota($data)
    {
        // Panggil event untuk membuat user
        $baruAnggotaEvent = new BaruAnggotaEvent($data);
        // Panggil event untuk membuat user
        Events::trigger('baruAnggota', $baruAnggotaEvent);

        // Ambil id_user yang baru saja dibuat
        $userModel = new UserModel();
        $id_user = $userModel->getLastUserId();

        // Masukkan id_user ke dalam data untuk di-insert ke master_anggota
        $data['id_user'] = $id_user;

        // Lakukan insert ke tabel master_anggota dengan id_user yang sudah diambil
        $this->insert($data);
    }
}
