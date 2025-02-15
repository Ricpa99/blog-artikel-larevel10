# Blog Artikel Laravel 10

Proyek ini adalah aplikasi web **Blog Artikel** yang dibangun menggunakan Laravel 10. Aplikasi ini memungkinkan pengguna untuk membuat, membaca, memperbarui, dan menghapus artikel blog dengan antarmuka yang sederhana dan intuitif, saya menggunakan dashboard yang saya download dari google dan mengeditnya sedikit.

## Fitur

- **Manajemen Artikel**: CRUD (Create, Read, Update, Delete) untuk artikel.
- **Autentikasi Pengguna**: Registrasi, login, dan logout.
- **UI yang di gunakan**: Bootstrap.
- **Kategori**: Pengelompokan artikel berdasarkan kategori.
- **Pencarian**: Fitur pencarian untuk menemukan artikel berdasarkan kata kunci.

## Persyaratan Sistem

Pastikan sistem Anda memenuhi persyaratan berikut sebelum menginstal aplikasi ini:

- PHP versi 8.2 atau lebih baru
- Composer
- Node.js dan NPM
- Database MySQL
- Web Server seperti Apache atau Nginx

## 🔧 Instalasi

Ikuti langkah-langkah berikut untuk menginstal dan menjalankan proyek ini di lingkungan lokal Anda:

1. **Kloning repositori**:

   ```bash
   git clone https://github.com/Ricpa99/blog-artikel-laravel10.git
   cd blog-artikel-laravel10/Blog
    ```
2. **Konfigurasi database**
Edit file .env dan sesuaikan pengaturan database berikut:

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nama_database_anda
    DB_USERNAME=username_anda
    DB_PASSWORD=password_anda
    ```
3. **Migrasi dan seeding database berikut beberapa cara migrasi database:**
    ```
    php artisan migrate --seed
    php artisan migrate:fresh --seed
    php artisan db:seed
    ```
4. **Link storage bertujuan untuk gambar yang di dilam file storage menjadi publik dan dapat di tampilkan di halaman web:**
    ```
    php artisan storage:link
    ```
5. **Jalankan server pengembangan:**
    ```
    php artisan serve
    ```
6. ## 📸 screnshoot

