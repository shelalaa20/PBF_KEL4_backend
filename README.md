

# 📌Sistem Informasi Sidang Tugas Akhir
Sistem ini membantu mahasiswa, dosen penguji, dan admin akademik dalam mengelola jadwal dan proses sidang tugas akhir.




##  Tentang CodeIgniter 4
**CodeIgniter 4** adalah sebuah framework PHP yang ringan dan cepat digunakan untuk membangun aplikasi web.  
Framework ini mendukung konsep **MVC (Model-View-Controller)** yang memisahkan logika program, tampilan, dan pengelolaan data untuk mempermudah pengembangan dan pemeliharaan aplikasi.

---

##  Arsitektur MVC

* Model
Bertanggung jawab dalam mengelola data dan berinteraksi langsung dengan database (Create, Read, Update, Delete).

* View
Menyajikan tampilan antarmuka kepada pengguna (menggunakan HTML, CSS, dsb), tanpa melibatkan logika bisnis.

* Controller
Mengatur alur kerja aplikasi. Menerima permintaan dari pengguna, memprosesnya, memanggil data dari Model, lalu mengirimkan hasilnya ke View.

---
## Cek Composer

Pastikan Composer sudah terinstall dengan menjalankan perintah:

```bash
composer -v
```
Jika muncul versi Composer, berarti sudah terpasang.
Kalau belum ada, silakan download dan install Composer dari https://getcomposer.org/download/.
## Install CodeIgniter4
```
composer create-project codeigniter4/appstarter namaproject
```
## Clone Repository
```
git clone https://github.com/shelalaa20/PBF_KEL4_backend.git
cd sistem_sidangakhir
```

## Installasi
```
composer install 

```
## konfigurasi db
edit file .env menjadi seperti berikut
```php
database.default.hostname = localhost
database.default.database = sistem_sidangakhir
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQL
```
## Menjalankan Server CI4
```
php spark serve 
```

## Menggunakan API di Postman
```
http://localhost:8080/nama-endpoint
```
