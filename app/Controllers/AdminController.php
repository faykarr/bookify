<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/dashboard');
    }

    public function indexBuku()
    {
        $data = [
            'model' => $this->bukuModel->findAll()
        ];
        return view('admin/buku/index', $data);
    }
}
