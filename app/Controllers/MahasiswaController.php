<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;

class MahasiswaController extends ResourceController
{
    protected $modelName = 'App\Models\MahasiswaModel';
    protected $format    = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    public function show($id = null)
    {
        $data = $this->model->find($id);
        if (!$data) {
            return $this->failNotFound("Data dengan NIM $id tidak ditemukan");
        }
        return $this->respond($data);
    }

    public function create()
    {
        $json = $this->request->getJSON();
        $data = [
            'NIM' => $json->NIM,
            'nama_mahasiswa' => $json->nama_mahasiswa,
            'alamat' => $json->alamat,
            'kelas' => $json->kelas,
            'prodi' => $json->prodi,
            'judul_tugasakhir' => $json->judul_tugasakhir,
        ];
        $this->model->insert($data);
        return $this->respondCreated(['message' => 'Data berhasil ditambahkan']);
    }

    public function update($id = null)
    {
        $json = $this->request->getJSON();
        $data = [
            'nama_mahasiswa' => $json->nama_mahasiswa,
            'alamat' => $json->alamat,
            'kelas' => $json->kelas,
            'prodi' => $json->prodi,
            'judul_tugasakhir' => $json->judul_tugasakhir,
        ];
        $this->model->update($id, $data);
        return $this->respond(['message' => 'Data berhasil diperbarui']);
    }

    public function delete($id = null)
    {
        try {
            // Cek dulu apakah data dengan NIM itu ada
            $data = $this->model->find($id);
            if (!$data) {
                return $this->failNotFound("Data dengan NIM $id tidak ditemukan");
            }
    
            // Coba hapus data
            if ($this->model->delete($id)) {
                return $this->respondDeleted(['message' => "Data dengan NIM $id berhasil dihapus"]);
            } else {
                return $this->failServerError("Gagal menghapus data dengan NIM $id");
            }
    
        } catch (\Exception $e) {
            // Tangkap error dan tampilkan
            return $this->failServerError("Terjadi kesalahan: " . $e->getMessage());
        }
    }
}
