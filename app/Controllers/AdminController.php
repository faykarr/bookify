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

    public function createBuku()
    {
        return view('admin/buku/create');
    }

    public function storeBuku()
    {
        // Get the file & randomize the name
        $file = $this->request->getFile('gambar');
        $name = $file->getRandomName();

        // Move the file to the public/uploads folder
        $file->move('uploads', $name);

        $data = [
            'judul_buku' => $this->request->getPost('judul_buku'),
            'isbn' => $this->request->getPost('isbn'),
            'pengarang' => $this->request->getPost('pengarang'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
            'stok_buku' => $this->request->getPost('stok_buku'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'rak' => $this->request->getPost('rak'),
            'gambar' => $name
        ];
        
        
        $this->bukuModel->insert($data);
        return redirect()->to('/buku')->with('success', 'Data Buku berhasil ditambahkan.');
    }

    public function deleteBuku($id)
    {
        $this->bukuModel->delete($id);
        return $this->response->setJSON(['success' => true]);
    }

    public function editBuku($id)
    {
        $data = [
            'model' => $this->bukuModel->find($id)
        ];
        return view('admin/buku/edit', $data);
    }
}
