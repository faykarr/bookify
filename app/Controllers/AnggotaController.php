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

    public function storePeminjaman()
    {
        $data = [
            'id_buku' => $this->request->getPost('id_buku'),
            'id_anggota' => $this->request->getPost('id_anggota'),
            'tgl_pinjam' => $this->request->getPost('tgl_pinjam'),
            'jatuh_tempo' => $this->request->getPost('jatuh_tempo'),
            'status' => 'Pending'
        ];

        // Check validation request
        if (
            !$this->validate([
                'id_buku' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kode buku harus diisi.'
                    ]
                ],
                'id_anggota' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kode anggota harus diisi.'
                    ]
                ],
                'tgl_pinjam' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tanggal mulai pinjam harus diisi.'
                    ]
                ],
                'jatuh_tempo' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tanggal jatuh tempo harus diisi.'
                    ]
                ]
            ])
        ) {
            session()->setFlashdata('error', 'Isi form peminjaman dengan teliti!.');
            // Back to pinjamBuku page
            return redirect()->to(base_url('katalog/pinjam/' . $data['id_buku']));
        }
        $this->peminjamanModel->insert($data);
        session()->setFlashdata('success', 'Pengajuan peminjaman berhasil! Silahkan tunggu konfirmasi dari admin.');
        return redirect()->to(base_url('history'));
    }

    public function historyPeminjaman()
    {
        $auth = service('authentication');
        $id_user = $auth->user()->id;
        $anggota = $this->anggotaModel->where('id_user', $id_user)->first();

        // Get a subset of records based on the current page and perPage
        $peminjaman = $this->peminjamanModel->getPeminjamanByIdAnggota($anggota['id_anggota']);

        // Pass data to the view
        $data = [
            'model' => $peminjaman
        ];

        return view('anggota/history/index', $data);
    }

    public function kembaliPeminjaman($id)
    {
        $data = [
            'status' => 'Ajukan Kembali'
        ];
        $this->peminjamanModel->update($id, $data);
        session()->setFlashdata('success', 'Pengajuan pengembalian buku berhasil! Silahkan tunggu konfirmasi dari admin.');
        return redirect()->to(base_url('history'));
    }
}
