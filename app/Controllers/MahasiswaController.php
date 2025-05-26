<?php


namespace App\Controllers;

// Menggunakan ResourceController dari CodeIgniter untuk REST API
use CodeIgniter\RESTful\ResourceController;

class MahasiswaController extends ResourceController
{
    // Menghubungkan controller ini dengan model MahasiswaModel
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
        // Mengambil data JSON dari body request
        $json = $this->request->getJSON();

        // Menyusun data ke dalam bentuk array
        $data = [
            'NIM' => $json->NIM,
            'nama_mahasiswa' => $json->nama_mahasiswa,
            'alamat' => $json->alamat,
            'kelas' => $json->kelas,
            'prodi' => $json->prodi,
            'judul_tugasakhir' => $json->judul_tugasakhir,
        ];

        // Menyimpan data ke database melalui model
        $this->model->insert($data);

        // Mengembalikan respon sukses
        return $this->respondCreated(['message' => 'Data berhasil ditambahkan']);
    }

  
    public function update($id = null)
    {
        // Mengambil data JSON dari body request
        $json = $this->request->getJSON();

        // Validasi jika tidak ada data JSON yang dikirim
        if (!$json) {
            return $this->fail('Request body harus berupa JSON yang valid', 400);
        }

        // Mengecek apakah data dengan NIM tersebut ada di database
        $existing = $this->model->find($id);
        if (!$existing) {
            return $this->failNotFound("Data dengan NIM $id tidak ditemukan");
        }

        // Menyusun data yang akan diperbarui
        $data = [
            'nama_mahasiswa' => $json->nama_mahasiswa,
            'alamat' => $json->alamat,
            'kelas' => $json->kelas,
            'prodi' => $json->prodi,
            'judul_tugasakhir' => $json->judul_tugasakhir,
        ];

        // Memperbarui data mahasiswa berdasarkan NIM
        $this->model->update($id, $data);

        // Memberikan respon sukses
        return $this->respond(['message' => 'Data berhasil diperbarui']);
    }

    public function delete($id = null)
    {
        try {
            // Mencari data mahasiswa berdasarkan NIM
            $data = $this->model->find($id);

            // Jika data tidak ditemukan, kembalikan respon gagal
            if (!$data) {
                return $this->failNotFound("Data dengan NIM $id tidak ditemukan");
            }

            // Jika data ditemukan, coba hapus dari database
            if ($this->model->delete($id)) {
                return $this->respondDeleted(['message' => "Data dengan NIM $id berhasil dihapus"]);
            } else {
                return $this->failServerError("Gagal menghapus data dengan NIM $id");
            }

        } catch (\Exception $e) {
            // Menangkap dan menampilkan pesan kesalahan jika terjadi error
            return $this->failServerError("Terjadi kesalahan: " . $e->getMessage());
        }
    }
}
