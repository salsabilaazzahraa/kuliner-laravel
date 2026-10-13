# Kuliner Surabaya - Laravel MVC (XAMPP, macOS)

Zip ini berisi **file tambahan** untuk project Laravel baru (bukan project Laravel utuh).
Folder project nanti bernama `kuliner-laravel` di dalam htdocs XAMPP.

## 1. Persiapan
- XAMPP sudah terpasang. Buka XAMPP Manager, **Start** Apache dan MySQL.
- Composer sudah terpasang. Cek di Terminal:

      composer -V

- Agar Terminal memakai PHP milik XAMPP (versi sama dengan Apache), jalankan:

      export PATH="/Applications/XAMPP/xamppfiles/bin:$PATH"
      php -v

  Composer akan memilih versi Laravel yang cocok dengan versi PHP ini secara otomatis.

## 2. Buat project di htdocs
    cd /Applications/XAMPP/xamppfiles/htdocs
    composer create-project laravel/laravel kuliner-laravel
    cd kuliner-laravel

Jika muncul "Permission denied", jalankan sekali:

    sudo chown -R $(whoami) /Applications/XAMPP/xamppfiles/htdocs

lalu ulangi perintah di atas.

## 3. Salin file dari zip ini
Salin isi folder `kuliner-surabaya-laravel` (hasil extract zip) ke dalam `kuliner-laravel`.
Gabungkan folder dan timpa `routes/web.php` jika ditanya.

## 4. Izin folder (supaya Apache bisa menulis cache Laravel)
    chmod -R 777 storage bootstrap/cache

## 5. Buka di browser
    http://localhost/kuliner-laravel/public

| URL (setelah /public) | Halaman                         |
|-----------------------|---------------------------------|
| /                     | Beranda                         |
| /kuliner              | Katalog (semua item dari array) |
| /kuliner/1            | Detail berdasarkan ID di URL    |

Alternatif tanpa Apache: `php artisan serve`, lalu buka http://127.0.0.1:8000

## 6. Database di phpMyAdmin
1. Buka http://localhost/phpmyadmin (MySQL XAMPP harus Start).
2. Tab **Import** > **Choose File** > pilih `database/kuliner_surabaya.sql` > **Go**.
3. Terbentuk database `kuliner_surabaya`, tabel `kuliners`, 7 baris.

Soal gambar: phpMyAdmin hanya menyimpan NAMA FILE gambar di kolom `gambar`
(misal `rawon.jpg`). File gambarnya sendiri ada di folder `public/images`.

Aplikasi membaca data dari ARRAY di `app/Models/Kuliner.php` (sesuai ketentuan tugas:
tanpa database). Tabel di phpMyAdmin hanya salinan data yang sama, `.env` tidak perlu diubah.

## Alur MVC
Browser -> Route (routes/web.php) -> Controller (KulinerController)
-> Model (Kuliner: all() dan find($id)) -> View (Blade + Bootstrap) -> Browser
