

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
