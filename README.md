# TugasWeb-P10-BlogCRUD

## Identitas

**Nama:** Muhammad Hafaz Baihaqi
**Universitas:** Universitas Negeri Medan
**Mata Kuliah:** Pemrograman Web
**Pertemuan:** 10
**Project:** Blog CRUD Laravel

---

## Deskripsi

Project ini merupakan aplikasi **Blog CRUD sederhana menggunakan Laravel**.

Aplikasi memiliki fitur:

* Menampilkan daftar post
* Menambahkan post
* Melihat detail post
* Mengedit post
* Menghapus post
* Validasi input
* Menampilkan error per field
* Old input setelah validasi gagal
* Flash message
* Pagination
* Blade Layout
* Blade Component
* Route Model Binding
* CSRF Protection
* Method Spoofing

---

## Teknologi

* Laravel 13
* PHP 8.5
* MySQL
* Blade
* HTML
* CSS
* Composer
* XAMPP

---

## Instalasi

### 1. Clone atau salin project

Letakkan project pada folder:

```text
C:\xampp0\htdocs\TugasWeb-P10-BlogCRUD
```

### 2. Install dependency

Buka CMD pada folder project, kemudian jalankan:

```bash
composer install
```

### 3. Buat file `.env`

Salin file `.env.example` menjadi `.env`.

Kemudian sesuaikan konfigurasi database pada `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tugas_p10
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate application key

Jalankan:

```bash
php artisan key:generate
```

### 5. Buat database

Buat database MySQL dengan nama:

```text
tugas_p10
```

Database dapat dibuat melalui **phpMyAdmin** pada XAMPP.

### 6. Jalankan migration

Jalankan:

```bash
php artisan migrate
```

### 7. Jalankan server Laravel

Jalankan:

```bash
php artisan serve
```

Kemudian buka browser:

```text
http://127.0.0.1:8000/posts
```

---

## Fitur CRUD

### Daftar Post

Menampilkan seluruh post yang tersimpan di database dengan pagination.

### Tambah Post

Pengguna dapat menambahkan post baru dengan mengisi:

* Judul
* Isi post

Form menggunakan validasi dan CSRF protection.

### Detail Post

Menampilkan judul, isi, tanggal dibuat, dan tanggal terakhir diperbarui.

### Edit Post

Pengguna dapat mengubah judul dan isi post.

### Hapus Post

Pengguna dapat menghapus post dengan konfirmasi sebelum penghapusan.

---

## Validasi

Form post menggunakan validasi Laravel.

Field yang divalidasi:

```text
title : required|max:200
body  : required
```

Jika validasi gagal, aplikasi akan:

* Menampilkan pesan error
* Mempertahankan input sebelumnya menggunakan `old()`

---

## Blade Component

Project menggunakan dua Blade Component:

```text
resources/views/components/alert.blade.php
resources/views/components/card.blade.php
```

Component digunakan pada halaman Blog CRUD untuk membuat tampilan lebih terstruktur dan dapat digunakan kembali.

---

## Blade Layout

Layout utama berada pada:

```text
resources/views/layouts/app.blade.php
```

Layout digunakan oleh halaman:

```text
posts/index.blade.php
posts/create.blade.php
posts/edit.blade.php
posts/show.blade.php
```

---

## Route

Project menggunakan **Resource Controller** untuk mengatur route CRUD:

```php
Route::resource('posts', PostController::class);
```

Route utama:

| Method    | URL                  | Fungsi                  |
| --------- | -------------------- | ----------------------- |
| GET       | `/posts`             | Menampilkan daftar post |
| GET       | `/posts/create`      | Form tambah post        |
| POST      | `/posts`             | Menyimpan post          |
| GET       | `/posts/{post}`      | Menampilkan detail      |
| GET       | `/posts/{post}/edit` | Form edit               |
| PUT/PATCH | `/posts/{post}`      | Memperbarui post        |
| DELETE    | `/posts/{post}`      | Menghapus post          |

---

## Struktur Folder Utama

```text
TugasWeb-P10-BlogCRUD/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── PostController.php
│   └── Models/
│       └── Post.php
│
├── database/
│   └── migrations/
│
├── resources/
│   └── views/
│       ├── components/
│       │   ├── alert.blade.php
│       │   └── card.blade.php
│       │
│       ├── layouts/
│       │   └── app.blade.php
│       │
│       └── posts/
│           ├── index.blade.php
│           ├── create.blade.php
│           ├── edit.blade.php
│           └── show.blade.php
│
├── routes/
│   └── web.php
│
├── .env.example
├── composer.json
├── composer.lock
└── artisan
```

---

## Kesimpulan

Project **TugasWeb-P10-BlogCRUD** merupakan aplikasi Blog CRUD berbasis Laravel yang menerapkan operasi Create, Read, Update, dan Delete. Project juga menerapkan validation, old input, flash message, pagination, Blade Layout, Blade Component, Route Model Binding, CSRF Protection, dan Method Spoofing.

Project dibuat untuk memenuhi **Tugas Rutin Pertemuan 10 Pemrograman Web**.
