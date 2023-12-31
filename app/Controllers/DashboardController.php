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
            return view('anggota/dashboard');
        }
    }
}
