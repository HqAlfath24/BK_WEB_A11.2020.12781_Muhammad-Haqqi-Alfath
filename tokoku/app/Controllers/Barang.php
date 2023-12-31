<?php

namespace App\Controllers;

use App\Models\BarangModel;
use CodeIgniter\Controller;

class Barang extends Controller
{
    public function index()
    {
        $barangModel = new BarangModel();
        $data['barang'] = $barangModel->findAll();

        return view('barang/index', $data);
    }

    public function create()
    {
        // Tampilkan form tambah barang
        return view('barang/create');
    }

    public function store()
    {
        $barangModel = new BarangModel();

        // Ambil data dari form tambah barang
        $data = [
            'nama' => $this->request->getPost('nama'),
            'harga' => $this->request->getPost('harga'),
            'stok' => $this->request->getPost('stok'),
            'gambar' => $this->request->getPost('gambar'),
            'id_kategori' => $this->request->getPost('id_kategori'),
            'created_by' => 1, // Ganti dengan ID pengguna yang sesuai
            'created_date' => date('Y-m-d H:i:s')
        ];

        // Simpan data barang ke database
        $barangModel->insert($data);

        // Redirect ke halaman index
        return redirect()->to(base_url('barang'));
    }

    public function edit($id)
    {
        $barangModel = new BarangModel();
        $data['barang'] = $barangModel->find($id);

        // Tampilkan form edit barang
        return view('barang/edit', $data);
    }

    public function update($id)
    {
        $barangModel = new BarangModel();

        // Ambil data dari form edit barang
        $data = [
            'nama' => $this->request->getPost('nama'),
            'harga' => $this->request->getPost('harga'),
            'stok' => $this->request->getPost('stok'),
            'gambar' => $this->request->getPost('gambar'),
            'id_kategori' => $this->request->getPost('id_kategori'),
            'updated_by' => 1, // Ganti dengan ID pengguna yang sesuai
            'updated_date' => date('Y-m-d H:i:s')
        ];

        // Update data barang di database
        $barangModel->update($id, $data);

        // Redirect ke halaman index
        return redirect()->to(base_url('barang'));
    }

    public function delete($id)
    {
        $barangModel = new BarangModel();

        // Hapus data barang dari database
        $barangModel->delete($id);

        // Redirect ke halaman index
        return redirect()->to(base_url('barang'));
    }
}

