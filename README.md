# Laravel API Project - Manajemen Produk

Project ini adalah REST API sederhana menggunakan Laravel untuk mengelola data produk.

## 🔧 Tech Stack

-   Laravel 10+
-   PHP 8.x
-   MySQL / PostgreSQL
-   Thunder Client / Postman (untuk testing)

---

## 📦 Endpoint API

| Method | Endpoint         | Fungsi             |
| ------ | ---------------- | ------------------ |
| GET    | /api/produk      | Lihat semua produk |
| GET    | /api/produk/{id} | Lihat 1 produk     |
| POST   | /api/produk      | Tambah produk      |
| PUT    | /api/produk/{id} | Edit produk        |
| DELETE | /api/produk/{id} | Hapus produk       |

---

## 🚀 Cara Menjalankan Project

```bash
git clone https://github.com/rahulistajrimukti/apiproject.git
cd apiproject
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

🔐 Catatan
Jangan lupa isi konfigurasi .env dengan koneksi database yang sesuai.

Tambahkan validasi & auth (Sanctum/JWT) jika diperlukan.

🧑‍💻 Author
By Rahulistajrimukti
