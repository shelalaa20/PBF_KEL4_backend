<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;

class SidangController extends ResourceController
{
    protected $modelName = 'App\Models\SidangModel';
    protected $format    = 'json';

    public function index()
    {
        $db = \Config\Database::connect();

        $builder = $db->table('sidang s')
            ->select('s.*, m.nama_mahasiswa, d.nama_dosen')
            ->join('mahasiswa m', 'm.NIM = s.NIM')
            ->join('dosen d', 'd.NIDN = s.NIDN');

        $data = $builder->get()->getResultArray();

        return $this->respond($data);
    }

    public function show($id = null)
    {
        $data = $this->model->find($id);
        if (!$data) {
            return $this->failNotFound("Data dengan ID Sidang $id tidak ditemukan");
        }
        return $this->respond($data);
    }

    public function create()
    {
        $json = $this->request->getJSON();
        $data = [
            'NIM' => $json->NIM,
            'NIDN' => $json->NIDN,
            'waktu_sidang' => $json->waktu_sidang,
            'ruang_sidang' => $json->ruang_sidang,
        ];

        if (!$this->model->insert($data)) {
            return $this->failValidationErrors($this->model->errors());
        }

        return $this->respondCreated(['message' => 'Data Sidang berhasil ditambahkan']);
    }
    
    public function update($id = null)
    {
        $json = $this->request->getJSON();
        $data = [
            'NIM' => $json->NIM,
            'NIDN' => $json->NIDN,
            'waktu_sidang' => $json->waktu_sidang,
            'ruang_sidang' => $json->ruang_sidang,
        ];
        $this->model->update($id, $data);
        return $this->respond(['message' => 'Data Sidang berhasil diperbarui']);
    }

    public function delete($id = null)
    {
        $this->model->delete($id);
        return $this->respondDeleted(['message' => 'Data Sidang berhasil dihapus']);
    }
}
