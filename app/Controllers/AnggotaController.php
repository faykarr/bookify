<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AnggotaController extends BaseController
{
    public function index()
    {
        return view('anggota/dashboard');
    }

    public function katalog()
    {
        $data = [
            'buku' => $this->bukuModel->findAll()
        ];
        return view('anggota/katalog/index', $data);
    }

    public function showBuku($id)
    {
        $data = [
            'model' => $this->bukuModel->find($id)
        ];
        return view('anggota/katalog/show', $data);
    }
}
