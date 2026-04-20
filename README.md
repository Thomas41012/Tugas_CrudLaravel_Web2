<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======

# 📦 CRUD Produk - Laravel 12

Aplikasi web sederhana berbasis **Laravel 12** yang digunakan untuk mengelola data produk dengan fitur **CRUD (Create, Read, Update, Delete)**. Project ini dibuat sebagai latihan/pembelajaran penggunaan framework Laravel dengan database MySQL.

---

## ✨ Fitur Utama

* ✅ Menampilkan daftar produk
* ➕ Menambahkan data produk
* ✏️ Mengedit data produk
* ❌ Menghapus data produk
* 📄 Pagination (pembagian halaman)

---

## 🛠️ Teknologi yang Digunakan

| Teknologi  | Keterangan               |
| ---------- | ------------------------ |
| PHP 8+     | Bahasa pemrograman utama |
| Laravel 12 | Framework backend        |
| MySQL      | Database                 |
| Bootstrap  | (Opsional) UI Styling    |

---

## ⚙️ Instalasi & Setup

Ikuti langkah-langkah berikut untuk menjalankan project di lokal:

### 1. Clone Repository

```bash
git clone https://github.com/username/nama-repository.git
cd nama-repository
```

### 2. Install Dependency

```bash
composer install
```

### 3. Copy File Environment

```bash
cp .env.example .env
```

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Konfigurasi Database

Buka file `.env`, lalu sesuaikan dengan database kamu:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

---

### 6. Migrasi Database

```bash
php artisan migrate
```

---

### 7. Jalankan Server

```bash
php artisan serve
```

Akses aplikasi melalui browser:

```
http://127.0.0.1:8000/product
```

---

## 📁 Struktur Project

```
app/
 ├── Models/
 │    └── Product.php
 ├── Http/
 │    └── Controllers/
 │         └── ProductController.php

database/
 └── migrations/
      └── create_products_table.php

resources/
 └── views/
      └── product/
           ├── index.blade.php
           ├── create.blade.php
           ├── edit.blade.php
           └── show.blade.php

routes/
 └── web.php
```

---

## 🔗 Routing

```php
Route::resource('product', ProductController::class);
```

---

## 🧩 Struktur Database

Tabel: `products`

| Field      | Tipe      | Keterangan   |
| ---------- | --------- | ------------ |
| id         | bigint    | Primary Key  |
| name       | string    | Nama produk  |
| code       | string    | Kode produk  |
| price      | decimal   | Harga produk |
| created_at | timestamp | Waktu dibuat |
| updated_at | timestamp | Waktu update |

---

## 🚀 Cara Deploy ke GitHub

### 1. Inisialisasi Git

```bash
git init
git add .
git commit -m "Initial commit - CRUD Produk Laravel 12"
```

### 2. Hubungkan ke Repository

```bash
git remote add origin https://github.com/username/nama-repository.git
```

### 3. Push ke GitHub

```bash
git branch -M main
git push -u origin main
```

---

## ⚠️ Troubleshooting

### ❌ Push Ditolak (Rejected)

```bash
git pull origin main --allow-unrelated-histories
git push -u origin main
```

### ❌ Error View Not Found

Pastikan folder:

```
resources/views/product/
```

sudah berisi file blade:

* index.blade.php
* create.blade.php
* edit.blade.php

---

## 👨‍💻 Author

* **Nama**  : Thomas Christhoper Simanungkalit
* **Github**   : @Thomas41012
* **Kelas** : (Opsional)
---

## 📌 Catatan

Project ini dibuat untuk keperluan pembelajaran dan dapat dikembangkan lebih lanjut seperti:

* 🔍 Fitur pencarian produk
* 🔐 Sistem login (authentication)
* 📊 Dashboard admin

---

⭐ Jangan lupa beri **star** jika project ini membantu!
