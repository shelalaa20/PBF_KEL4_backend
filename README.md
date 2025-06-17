

# 📌Sistem Informasi Sidang Tugas Akhir
Sistem ini membantu mahasiswa, dosen penguji, dan admin akademik dalam mengelola jadwal dan proses sidang tugas akhir.

## 🧩 Backend Tools & Technologies
- **Visual Studio Code**
- **Bahasa Pemrograman**: PHP 8.3.17
- **Framework**: CodeIgniter 4 (CI4)
- **Database**: MySQL (bawaan dari Laragon)
- **Local Server**: Laragon
- **API Testing**: Postman
  
---
## 🧩 Tentang CodeIgniter 4
**CodeIgniter 4** adalah sebuah framework PHP yang ringan dan cepat digunakan untuk membangun aplikasi web.  
Framework ini mendukung konsep **MVC (Model-View-Controller)** yang memisahkan logika program, tampilan, dan pengelolaan data untuk mempermudah pengembangan dan pemeliharaan aplikasi.

---
* Model
Bertanggung jawab dalam mengelola data dan berinteraksi langsung dengan database (Create, Read, Update, Delete).

* View
Menyajikan tampilan antarmuka kepada pengguna (menggunakan HTML, CSS, dsb), tanpa melibatkan logika bisnis.

* Controller
Mengatur alur kerja aplikasi. Menerima permintaan dari pengguna, memprosesnya, memanggil data dari Model, lalu mengirimkan hasilnya ke View.

---
## 🧩 Impor Database
download file sql dibawah ini, kemudian impor ke database 
[sistem_sidangakhir.sql](https://github.com/shelalaa20/PBF_KEL4_backend/blob/main/sistem_sidangakhir.sql) 
## 🧩 Buat Project
* Cek Composer

Pastikan Composer sudah terinstall dengan menjalankan perintah:

```bash
composer -v
```
Jika muncul versi Composer seperti berikut, berarti sudah terpasang.
![image](https://github.com/user-attachments/assets/85578355-0480-48a1-9b1d-c7695a3e250f)
Kalau belum ada, silakan download dan install Composer dari https://getcomposer.org/download/.
* Install CodeIgniter4
```
composer create-project codeigniter4/appstarter namaproject
```
## 🧩 Copy Project
* Clone Repository
```
git clone https://github.com/shelalaa20/PBF_KEL4_backend.git
cd sistem_sidangakhir
```

## 🧩 Installasi
```
composer install 

```
## 📄 Modifikasi file Database.php
edit file Database.php menjadi seperti berikut

```
        'hostname'     => 'localhost',
        'username'     => 'root',
        'password'     => '',
        'database'     => 'sistem_sidangakhir',
```
[klik untuk melihat code keseluruhan](https://github.com/shelalaa20/PBF_KEL4_backend/blob/main/app/Config/Database.php)
## 📁 Modifikasi App\Models
- [UserModel.php](https://github.com/shelalaa20/PBF_KEL4_backend/blob/main/app/Models/UserSidangModel.php)
- [DosenModel.php ](https://github.com/shelalaa20/PBF_KEL4_backend/blob/main/app/Models/DosenModel.php )
- [MahasiswaModel.php ](https://github.com/shelalaa20/PBF_KEL4_backend/blob/main/app/Models/MahasiswaModel.php )
- [SidangModel.php](https://github.com/shelalaa20/PBF_KEL4_backend/blob/main/app/Models/SidangModel.php)
- [HasilSidang.php](https://github.com/shelalaa20/PBF_KEL4_backend/blob/main/app/Models/HasilSidangModel.php)
- [NotifikasiModel.php](https://github.com/shelalaa20/PBF_KEL4_backend/blob/main/app/Models/NotifikasiModel.php)
- [ViewJadwalSidang.php](https://github.com/shelalaa20/PBF_KEL4_backend/blob/main/app/Models/ViewJadwalSidangModel.php)
- [ViewNilaiMahasiswa.php](https://github.com/shelalaa20/PBF_KEL4_backend/blob/main/app/Models/ViewNilaiMahasiswaModel.php)

## 📁 Modifikasi App\Controllers
- [UserController.php](https://github.com/shelalaa20/PBF_KEL4_backend/blob/main/app/Controllers/UserController.php)
- [DosenController.php ](https://github.com/shelalaa20/PBF_KEL4_backend/blob/main/app/Controllers/DosenController.php )
- [MahasiswaController.php ](https://github.com/shelalaa20/PBF_KEL4_backend/blob/main/app/Controllers/MahasiswaController.php )
- [SidangController.php](https://github.com/shelalaa20/PBF_KEL4_backend/blob/main/app/Controllers/SidangController.php)
- [HasilSidangController.php](https://github.com/shelalaa20/PBF_KEL4_backend/blob/main/app/Controllers/HasilSidangController.php)
- [NotifikasiController.php](https://github.com/shelalaa20/PBF_KEL4_backend/blob/main/app/Controllers/NotifikasiController.php)
- [ViewJadwalSidangController.php](https://github.com/shelalaa20/PBF_KEL4_backend/blob/main/app/Controllers/ViewJadwalSidangController.php)
- [ViewNilaiMahasiswaController.php](https://github.com/shelalaa20/PBF_KEL4_backend/blob/main/app/Controllers/ViewNilaiMahasiswaController.php)

## 📄 Modifikasi file Routes.php
```
$routes->get('/', 'Home::index');
$routes->resource('mahasiswa', ['controller' => 'MahasiswaController']);
$routes->resource('dosen', ['controller' => 'DosenController']);
$routes->resource('sidang', ['controller' => 'SidangController']);
$routes->resource('hasil_sidang', ['controller' => 'HasilSidangController']);
$routes->resource('notifikasi', ['controller' => 'NotifikasiController']);
$routes->resource('user', ['controller' => 'UserController']);
$routes->resource('view_jadwalsidang', ['controller' => 'ViewJadwalSidangController']);
$routes->resource('view_nilaimahasiswa', ['controller' => 'ViewNilaiMahasiswaController']);
$routes->post('login', 'LoginController::login');
$routes->get('logout', 'LoginController::logout');
```
[klik untuk melihat code keseluruhan](https://github.com/shelalaa20/PBF_KEL4_backend/blob/main/app/Config/Routes.php)
## Menjalankan Server CI4
```
php spark serve 
```

## Menggunakan API di Postman
```
http://localhost:8080/nama-endpoint
```
* [Link Postman](https://app.getpostman.com/join-team?invite_code=0ef869963e2866805998208fbdd0104a6ebea6760c6ea5a2eb51cad8858da335&target_code=f4bedfdacc4cfdc20d01c94db8887aaa)

* [Drive Postman](https://drive.google.com/drive/folders/1oM_-M4-XOv8jatZQ66pT2e_izZ_DCZaM?usp=sharing)



# 📦 Panduan Frontend Laravel 10
disini mencoba pakai backend kelompok 1

## 1. Membuat project Laravel 10
```
composer create-project laravel/laravel:^10 nama-project
cd nama-project
php artisan serve 
```
🌐 Cek di browser http://127.0.0.1:8000 apakah halaman Laravel muncul.
## 2. Ubah konfigurasi file .env
```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:T+WJmbMPQ/755CfG45DXIIacwCOrLCFbE+eIC3mbwOQ=
APP_DEBUG=true
APP_URL=http://localhost/8000
```
yang di bawah ini dimatikan
```
LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laravel
# DB_USERNAME=root
# DB_PASSWORD=
```
## 3 Membuat Controller
```
php artisan make:controller nama-fileController
```
contoh
```
php artisan make:controller MahasiswaController
```
## 4 Isi file Controller, contoh MahasiswaController
```
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MahasiswaController extends Controller
{
    // Alamat API yang digunakan untuk mengakses data mahasiswa
    protected $api = 'http://localhost:8080/mahasiswa';

    // Menampilkan data mahasiswa (bisa dengan pencarian keyword)
    public function index(Request $request)
    {
        // Ambil semua data dari API
        $response = Http::get($this->api);
        $data = $response->json();

        // Ambil input pencarian dari query string (?q=...)
        $keyword = $request->input('q');

        // Jika keyword ada, filter data berdasarkan nama atau npm
        if ($keyword) {
            $data = array_filter($data, function ($item) use ($keyword) {
                return stripos($item['nama_mhs'], $keyword) !== false || 
                       stripos($item['npm_mhs'], $keyword) !== false;
            });
        }

        // Kirim data ke view
        return view('mahasiswa.index', ['mahasiswa' => $data]);
    }

    // Menampilkan form tambah data
    public function create()
    {
        return view('mahasiswa.create');
    }

    // Menyimpan data mahasiswa baru ke API
    public function store(Request $request)
    {
        // Kirim data POST ke API
        $response = Http::post($this->api, $request->all());

        // Jika berhasil, redirect ke halaman utama
        if ($response->successful()) {
            return redirect('/mahasiswa')->with('success', 'Data berhasil ditambahkan');
        } else {
            // Jika gagal, tampilkan error dan kembalikan input sebelumnya
            return back()->withErrors([
                'status' => $response->status(),
                'message' => 'Gagal menyimpan data.',
                'response' => $response->body()
            ])->withInput();
        }
    }

    // Menampilkan form edit data berdasarkan ID
    public function edit($id)
    {
        // Ambil data mahasiswa berdasarkan ID dari API
        $response = Http::get("http://localhost:8080/mahasiswa/$id");
        $result = $response->json();

        // Tampilkan form edit dengan data yang sudah ada
        return view('mahasiswa.edit', [
            'mahasiswa' => $result['data'] // ambil hanya bagian 'data'
        ]);
    }

    // Mengupdate data mahasiswa berdasarkan npm
    public function update(Request $request, $npm_mhs)
    {
        // Kirim data PUT ke API
        $response = Http::put("{$this->api}/{$npm_mhs}", $request->all());

        // Jika berhasil, redirect ke halaman utama
        if ($response->successful()) {
            return redirect('/mahasiswa')->with('success', 'Data berhasil diupdate');
        } else {
            // Jika gagal, tampilkan error dan kembalikan input sebelumnya
            return back()->withErrors([
                'status' => $response->status(),
                'message' => 'Gagal mengupdate data.',
                'response' => $response->body()
            ])->withInput();
        }
    }

    // Menghapus data mahasiswa berdasarkan npm
    public function destroy($npm_mhs)
    {
        // Kirim request DELETE ke API
        $response = Http::delete("{$this->api}/{$npm_mhs}");

        // Jika berhasil, kembali ke halaman utama
        if ($response->successful()) {
            return redirect('/mahasiswa')->with('success', 'Data berhasil dihapus');
        } else {
            // Jika gagal, tampilkan error
            return back()->withErrors([
                'status' => $response->status(),
                'message' => 'Gagal menghapus data.',
                'response' => $response->body()
            ]);
        }
    }
}
```
## 5 Tambahkan route di routes/web.php
Contoh file sebagai berikut, sebelumnya ingat ya routes ini bisa diubah ubah mau nguji tampilan pertamanya yang mana bisa diatur disini
```
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;

// ==============================
// ✅ Login routes
// ==============================

// Tampilkan halaman login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Proses login
Route::post('/login', [LoginController::class, 'login']);

// Logout dan hapus session
Route::get('/logout', [LoginController::class, 'logout']);


// ==============================
// ✅ Redirect ke login saat buka "/"
// ==============================

// Jika user buka root ("/"), arahkan ke halaman login
Route::get('/', fn() => redirect('/login'));


// ==============================
// ✅ Dashboard
// ==============================

// Tampilkan dashboard hanya jika sudah login
Route::get('/dashboard', function () {
    // Cek apakah user sudah login (session username tersedia)
    if (!session('username')) {
        return redirect('/login');
    }

    // Kalau sudah login, tampilkan halaman dashboard dari controller
    $controller = new DashboardController;
    return $controller->index();
});


// ==============================
// ✅ CRUD Mahasiswa
// ==============================

// Menampilkan semua data mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');

// Menampilkan form tambah mahasiswa
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');

// Menyimpan data mahasiswa baru
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');

// Menampilkan form edit berdasarkan NPM mahasiswa
Route::get('/mahasiswa/{npm_mhs}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');

// Menyimpan perubahan data mahasiswa (update)
Route::put('/mahasiswa/{npm_mhs}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');

// Menghapus data mahasiswa berdasarkan NPM
Route::delete('/mahasiswa/{npm_mhs}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');
````
## 6 Buat Dashboard
### 📄 File: resources/views/layouts/app.blade.php
```blade
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

    {{-- Import Bootstrap dari CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Styling untuk layout dashboard --}}
    <style>
        body {
            min-height: 100vh;
            display: flex;
        }
        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: white;
            min-height: 100vh;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 12px;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
    </style>
</head>
<body>

    {{-- Sidebar navigasi --}}
    <div class="sidebar">
        <h4 class="text-center py-3 border-bottom">Mahasiswa App</h4>
        <a href="{{ url('/dashboard') }}">🏠 Home</a>
        <a href="{{ url('/mahasiswa') }}">🎓 Data Mahasiswa</a>
        <a href="{{ url('/logout') }}" onclick="return confirm('Yakin ingin logout?')">🔓 Logout</a>
    </div>

    {{-- Konten utama --}}
    <div class="content">
        {{-- Navbar bagian atas --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
            <div class="container-fluid">
                <span class="navbar-brand">Selamat Datang</span>
                {{-- Tombol logout di navbar telah dihapus --}}
            </div>
        </nav>

        {{-- Slot konten dinamis dari setiap halaman --}}
        @yield('content')
    </div>

</body>
</html>

```
### 📄 File: resources/views/dashboard.blade.php
```blade
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            display: flex;
        }
        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: white;
            min-height: 100vh;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 12px;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h4 class="text-center py-3 border-bottom">Mahasiswa App</h4>
        <a href="{{ url('/dashboard') }}">🏠 Home</a>
        <a href="{{ url('/mahasiswa') }}">🎓 Data Mahasiswa</a>
        <a href="{{ url('/pembimbing') }}">🎓 Data Pembimbing</a>
        <a href="{{ url('/logout') }}" onclick="return confirm('Yakin ingin logout?')">🔓 Logout</a>
    </div>

    <div class="container text-center">
        <h2 class="fw-bold mb-4">Dashboard Sistem Magang</h2>
        <div class="row justify-content">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Total Mahasiswa</h5>
                        <h3 class="fw-bold text-success">{{ $jumlahMahasiswa }}</h3>
                    </div>
                </div>
            </div>
            KALO NAMBAHIN LAGI DISINI
            
        </div>
    </div>
        </nav>

        @yield('content')
    </div>

</body>
</html>


```
## 7 Membuat tampilan (Views) 
Masing masing tabel punya folder sendiri, yang berisi 3 file, contohnya yaitu 
### 📄 File: resources/views/mahasiswa/index.blade.php

```blade
@extends('layouts.app') {{-- Memanggil layout utama --}}

@section('content') {{-- Mulai bagian konten yang akan ditampilkan di layout --}}
    {{-- Header dan tombol tambah --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold">Daftar Mahasiswa</h4>
        <a href="{{ url('/mahasiswa/create') }}" class="btn btn-success">+ Tambah Mahasiswa</a>
    </div>

    {{-- Notifikasi jika berhasil menyimpan / update / hapus --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Form pencarian mahasiswa --}}
    <form method="GET" action="{{ url('/mahasiswa') }}" class="mb-3">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Cari nama atau NPM..." value="{{ request('q') }}">
            <button class="btn btn-primary">Cari</button>
        </div>
    </form>

    {{-- Tabel daftar mahasiswa --}}
    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>NPM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th>Email</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($mahasiswa as $mhs) {{-- Perulangan data mahasiswa --}}
                    <tr>
                        <td>{{ $mhs['npm_mhs'] }}</td>
                        <td>{{ $mhs['nama_mhs'] }}</td>
                        <td>{{ $mhs['prodi'] }}</td>
                        <td>{{ $mhs['alamat'] }}</td>
                        <td>{{ $mhs['no_telp'] }}</td>
                        <td>{{ $mhs['email'] }}</td>
                        <td class="text-center">
                            {{-- Tombol Edit --}}
                            <a href="{{ url('/mahasiswa/' . $mhs['npm_mhs'] . '/edit') }}" class="btn btn-warning btn-sm me-1">Edit</a>

                            {{-- Tombol Hapus --}}
                            <form action="{{ url('/mahasiswa/' . $mhs['npm_mhs']) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin hapus?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="7" class="text-center">Belum ada data.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection {{-- Akhir section konten --}}
```

### 📄 File: resources/views/mahasiswa/create.blade.php

```blade
@extends('layouts.app') {{-- Menggunakan layout utama --}}

@section('content') {{-- Mulai isi konten halaman --}}

    {{-- Judul halaman --}}
    <h4 class="fw-bold mb-4">Tambah Mahasiswa</h4>

    {{-- Menampilkan pesan error validasi jika ada --}}
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form input data mahasiswa --}}
    <form action="{{ url('/mahasiswa') }}" method="POST" class="card p-4 shadow-sm">
        @csrf {{-- Token keamanan CSRF --}}

        <div class="row g-3">
            {{-- Input NPM --}}
            <div class="col-md-6">
                <label>NPM</label>
                <input type="text" name="npm_mhs" class="form-control" value="{{ old('npm_mhs') }}" required>
            </div>

            {{-- Input Nama --}}
            <div class="col-md-6">
                <label>Nama</label>
                <input type="text" name="nama_mhs" class="form-control" value="{{ old('nama_mhs') }}" required>
            </div>

            {{-- Input Prodi --}}
            <div class="col-md-6">
                <label>Prodi</label>
                <input type="text" name="prodi" class="form-control" value="{{ old('prodi') }}">
            </div>

            {{-- Input Alamat --}}
            <div class="col-md-6">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" value="{{ old('alamat') }}">
            </div>

            {{-- Input Nomor Telepon --}}
            <div class="col-md-6">
                <label>No. Telp</label>
                <input type="text" name="no_telp" class="form-control" value="{{ old('no_telp') }}">
            </div>

            {{-- Input Email --}}
            <div class="col-md-6">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
            </div>
        </div>

        {{-- Tombol Aksi --}}
        <div class="mt-4 d-flex justify-content-between">
            {{-- Tombol Batal kembali ke halaman daftar --}}
            <a href="{{ url('/mahasiswa') }}" class="btn btn-secondary">Batal</a>

            {{-- Tombol simpan data --}}
            <button class="btn btn-success">Simpan</button>
        </div>
    </form>

@endsection {{-- Akhir dari konten --}}
```
### 📄 File: resources/views/mahasiswa/edit.blade.php
```blade
@extends('layouts.app') {{-- Menggunakan layout utama --}}

@section('content') {{-- Awal konten halaman --}}

    {{-- Judul halaman --}}
    <h4 class="fw-bold mb-4">Edit Mahasiswa</h4>

    {{-- Tampilkan error validasi jika ada --}}
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form untuk mengedit data mahasiswa --}}
    <form action="{{ url('/mahasiswa/' . $mahasiswa['npm_mhs']) }}" method="POST" class="card p-4 shadow-sm">
        @csrf {{-- Token CSRF --}}
        @method('PUT') {{-- Method spoofing agar menjadi PUT --}}

        <div class="row g-3">
            {{-- Input NPM (readonly karena tidak bisa diedit) --}}
            <div class="col-md-6">
                <label>NPM</label>
                <input type="text" name="npm_mhs" class="form-control" value="{{ old('npm_mhs', $mahasiswa['npm_mhs']) }}" readonly>
            </div>

            {{-- Input Nama --}}
            <div class="col-md-6">
                <label>Nama</label>
                <input type="text" name="nama_mhs" class="form-control" value="{{ old('nama_mhs', $mahasiswa['nama_mhs']) }}" required>
            </div>

            {{-- Input Prodi --}}
            <div class="col-md-6">
                <label>Prodi</label>
                <input type="text" name="prodi" class="form-control" value="{{ old('prodi', $mahasiswa['prodi']) }}">
            </div>

            {{-- Input Alamat --}}
            <div class="col-md-6">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" value="{{ old('alamat', $mahasiswa['alamat']) }}">
            </div>

            {{-- Input Nomor Telepon --}}
            <div class="col-md-6">
                <label>No. Telp</label>
                <input type="text" name="no_telp" class="form-control" value="{{ old('no_telp', $mahasiswa['no_telp']) }}">
            </div>

            {{-- Input Email --}}
            <div class="col-md-6">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email', $mahasiswa['email']) }}">
            </div>
        </div>

        {{-- Tombol aksi --}}
        <div class="mt-4 d-flex justify-content-between">
            {{-- Tombol kembali ke daftar --}}
            <a href="{{ url('/mahasiswa') }}" class="btn btn-secondary">Batal</a>

            {{-- Tombol simpan perubahan --}}
            <button class="btn btn-primary">Simpan Perubahan</button>
        </div>
    </form>

@endsection {{-- Akhir konten halaman --}}
```
## 8 DashboardController
```blade
<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    

    public function index()
{
    $jumlahMahasiswa = 0;
    //NAMBAHIN LAGI DIBAWAH SINI
 

    if (!session('logged_in')) {
        return redirect('/login')->with('error', 'Silakan login dulu!');
    }

    $responseMahasiswa = Http::get('http://localhost:8080/mahasiswa');
    if ($responseMahasiswa->successful()) {
        $jumlahMahasiswa = count($responseMahasiswa->json());
    }
    //BIKIN LAGI DI BAWAH SINI

    //INI JUGA TAMBAHIN
    return view('dashboard', compact('jumlahMahasiswa'));// koma trs 'tambahan'
}
}
```
## 9 LoginController
```
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Menampilkan halaman form login
    public function showLoginForm()
    {
        return view('login');
    }

    // Proses login: cek username dan password
    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        // Login manual: hanya jika username "admin" dan password "123456"
        if ($username === 'admin' && $password === '123456') {
            // Simpan username ke sesi
            session(['username' => $username]);

            // Redirect ke halaman dashboard
            return redirect('/dashboard');
        }

        // Jika gagal, kembali ke login dengan pesan error
        return back()->with('error', 'Username atau Password salah!');
    }

    // Proses logout: hapus session
    public function logout()
    {
        session()->forget('username');
        return redirect('/login');
    }
}
```


           
