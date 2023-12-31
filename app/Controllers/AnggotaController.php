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
        return view('anggota/katalog/index');
    }
}
