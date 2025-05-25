<?php

namespace App\Models;
use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa'; // nama tabel di database
protected $primaryKey = 'NIM';  // harus sesuai dengan kolom primary key kamu
protected $useAutoIncrement = false; // karena NIM biasanya bukan auto increment
protected $allowedFields = ['NIM', 'nama_mahasiswa', 'alamat', 'kelas', 'prodi', 'judul_tugasakhir'];

}
