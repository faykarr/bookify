<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function index()
    {
        $auth = service('authentication');
        $role = $auth->user()->role;
        if ($role == 'admin') {
            return view('admin/dashboard');
        } else {
            $id_anggota = $this->anggotaModel->where('id_user', $auth->user()->id)->first()['id_anggota'];
            $data = [
                'user' => $auth->user(),
                // anggota find with id_user
                'anggota' => $this->anggotaModel->where('id_user', $auth->user()->id)->first(),
                // Get count all peminjaman by id anggota
                'total_peminjaman' => $this->peminjamanModel->getTotalPeminjamanByIdAnggota($id_anggota),
            ];
    
            return view('anggota/dashboard', $data);
        }
    }
}
