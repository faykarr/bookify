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
        $model = new \App\Models\BukuModel();

        // Get the current page from the URL
        $currentPage = $this->request->getVar('page') ?? 1;

        // Get a subset of records based on the current page and perPage
        $buku = $model->paginate(6, 'default', $currentPage);

        // Pass data to the view
        $data = [
            'buku' => $buku,
            'pager' => $model->pager,
            'currentPage' => $currentPage,
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

    public function pinjamBuku($id)
    {
        $auth = service('authentication');
        $id_user = $auth->user()->id;
        $anggota = $this->anggotaModel->where('id_user', $id_user)->first();
        $data = [
            'model' => $this->bukuModel->find($id),
            'anggota' => $anggota
        ];
        return view('anggota/katalog/pinjam', $data);
    }
}
