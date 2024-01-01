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
        // Unlink the image
        $oldImage = $this->bukuModel->find($id)['gambar'];
        unlink('uploads/' . $oldImage);
        return $this->response->setJSON(['success' => true]);
    }

    public function editBuku($id)
    {
        $data = [
            'model' => $this->bukuModel->find($id)
        ];
        return view('admin/buku/edit', $data);
    }

    public function updateBuku() {
        $id_buku = $this->request->getPost('id_buku');
        // Check if the user uploaded a new file & unlink the old one & delete the old one
        if ($this->request->getFile('gambar')->getName() != '') {
            $file = $this->request->getFile('gambar');
            $name = $file->getRandomName();
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
            $oldImage = $this->bukuModel->find($id_buku)['gambar'];
            unlink('uploads/' . $oldImage);
            $this->bukuModel->update($id_buku, $data);
            return redirect()->to('/buku')->with('success', 'Data Buku berhasil diubah.');
        } else {
            $data = [
                'judul_buku' => $this->request->getPost('judul_buku'),
                'isbn' => $this->request->getPost('isbn'),
                'pengarang' => $this->request->getPost('pengarang'),
                'penerbit' => $this->request->getPost('penerbit'),
                'tahun_terbit' => $this->request->getPost('tahun_terbit'),
                'stok_buku' => $this->request->getPost('stok_buku'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'rak' => $this->request->getPost('rak')
            ];
            $this->bukuModel->update($id_buku, $data);
            return redirect()->to('/buku')->with('success', 'Data Buku berhasil diubah.');
        }
    }

    public function detailBuku($id)
    {
        $data = [
            'model' => $this->bukuModel->find($id)
        ];
        return view('admin/buku/show', $data);
    }

    public function indexAnggota()
    {
        $data = [
            'model' => $this->anggotaModel->findAll()
        ];
        return view('admin/anggota/index', $data);
    }

    public function createAnggota()
    {
        return view('admin/anggota/create');
    }

    public function storeAnggota()
    {
        // Get the file & randomize the name
        $file = $this->request->getFile('foto');
        $name = $file->getRandomName();

        // Move the file to the public/uploads folder
        $file->move('uploads/anggota', $name);

        $data = [
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'no_telp' => $this->request->getPost('no_telp'),
            'foto' => $name,
            'email' => $this->request->getPost('email'),
            'username' => strtolower(str_replace(' ', '', $this->request->getPost('nama'))),
            'password' => 'anggota123',
        ];
        
        $this->anggotaModel->insertAnggota($data);
        return redirect()->to('/anggota')->with('success', 'Data Anggota berhasil ditambahkan.');
    }

    public function deleteAnggota($id)
    {
        // Unlink the image
        $oldImage = $this->anggotaModel->find($id)['foto'];
        unlink('uploads/anggota/' . $oldImage);
        $this->anggotaModel->delete($id);
        return $this->response->setJSON(['success' => true]);
    }

    public function editAnggota($id)
    {
        $id_user = $this->anggotaModel->find($id)['id_user'];
        $data = [
            'model' => $this->anggotaModel->find($id),
            'user' => $this->userModel->find($id_user)
        ];
        return view('admin/anggota/edit', $data);
    }

    public function updateAnggota() {
        $id_anggota = $this->request->getPost('id_anggota');
        $id_user = $this->anggotaModel->find($id_anggota)['id_user'];
        // Check if the user uploaded a new file & unlink the old one & delete the old one
        if ($this->request->getFile('foto')->getName() != '') {
            $file = $this->request->getFile('foto');
            $name = $file->getRandomName();
            $file->move('uploads/anggota', $name);
            $data = [
                'nim' => $this->request->getPost('nim'),
                'nama' => $this->request->getPost('nama'),
                'alamat' => $this->request->getPost('alamat'),
                'no_telp' => $this->request->getPost('no_telp'),
                'foto' => $name,
            ];
            $oldImage = $this->anggotaModel->find($id_anggota)['foto'];
            unlink('uploads/anggota/' . $oldImage);
            $this->anggotaModel->update($id_anggota, $data);
            $dataUser = [
                'email' => $this->request->getPost('email'),
                'username' => strtolower(str_replace(' ', '', $this->request->getPost('nama'))),
            ];
            $this->userModel->update($id_user, $dataUser);
            return redirect()->to('/anggota')->with('success', 'Data Anggota berhasil diubah.');
        } else {
            $data = [
                'nim' => $this->request->getPost('nim'),
                'nama' => $this->request->getPost('nama'),
                'alamat' => $this->request->getPost('alamat'),
                'no_telp' => $this->request->getPost('no_telp'),
            ];
            $this->anggotaModel->update($id_anggota, $data);
            $dataUser = [
                'email' => $this->request->getPost('email'),
                'username' => strtolower(str_replace(' ', '', $this->request->getPost('nama'))),
            ];
            $this->userModel->update($id_user, $dataUser);
            return redirect()->to('/anggota')->with('success', 'Data Anggota berhasil diubah.');
        }
    }

    public function detailAnggota($id)
    {
        $id_user = $this->anggotaModel->find($id)['id_user'];
        $data = [
            'model' => $this->anggotaModel->find($id),
            'user' => $this->userModel->find($id_user)
        ];
        return view('admin/anggota/show', $data);
    }

    public function indexPeminjaman()
    {
        $data = [
            'model' => $this->peminjamanModel->getAllPeminjaman()
        ];
        return view('admin/peminjaman/index', $data);
    }

    public function tolakPeminjaman($id)
    {
        $data = [
            'status' => 'Ditolak'
        ];
        $this->peminjamanModel->update($id, $data);
        return redirect()->to('/peminjaman')->with('success', 'Peminjaman berhasil ditolak.');
    }

    public function setujuiAction($id)
    {
        // Check if the status peminjaman is pending
        $status = $this->peminjamanModel->find($id)['status'];
        if ($status == 'Pending') {
            $data = [
                'status' => 'Disetujui'
            ];
            $this->peminjamanModel->update($id, $data);
            // Update stok buku
            $id_buku = $this->peminjamanModel->find($id)['id_buku'];
            $stok_buku = $this->bukuModel->find($id_buku)['stok_buku'];
            $dataBuku = [
                'stok_buku' => $stok_buku - 1
            ];
            $this->bukuModel->update($id_buku, $dataBuku);
            return redirect()->to('/peminjaman')->with('success', 'Peminjaman berhasil disetujui.');
        } elseif ($status == 'Ajukan Kembali') {
            $data = [
                'status' => 'Sudah Kembali',
                'tgl_kembali' => date('Y-m-d')
            ];
            $this->peminjamanModel->update($id, $data);
            // Update stok buku
            $id_buku = $this->peminjamanModel->find($id)['id_buku'];
            $stok_buku = $this->bukuModel->find($id_buku)['stok_buku'];
            $dataBuku = [
                'stok_buku' => $stok_buku + 1
            ];
            $this->bukuModel->update($id_buku, $dataBuku);
            return redirect()->to('/peminjaman')->with('success', 'Pengembalian berhasil disetujui.');
        }
    }
}
