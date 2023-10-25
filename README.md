Untuk membuka sebuah projek laravel yang sudah ada di GitHub, Anda dapat mengikuti langkah-langkah berikut:

1.  Clone Repositori dari GitHub:
    Buka terminal atau command prompt di komputer Anda, lalu jalankan perintah berikut:

        git clone https://github.com/AcepMuliaBahari/Poliklinik.git

2.  Instal Dependencies dengan Composer:
    Setelah berhasil mengklon repositori, masuk ke direktori proyek yang baru saja Anda clone:

    cd nama-repo

    Kemudian, instal semua dependensi PHP menggunakan Composer:

    composer install

3.  Konfigurasi File Lingkungan (Environment):

Duplikat file .env.example ke .env dan atur konfigurasi proyek Anda, seperti koneksi database dan konfigurasi lainnya. Anda bisa melakukannya dengan perintah:

    cp .env.example .env

4. Generate Key Aplikasi:

Untuk mengamankan sesi dan data Anda, Laravel membutuhkan aplikasi key. Anda dapat menghasilkan key ini dengan perintah berikut:
php artisan key:generate

5. Migrasi Database:

Jika proyek Laravel Anda menggunakan database, Anda harus menjalankan migrasi untuk membuat tabel-tabel yang diperlukan:
php artisan migrate

6. Menjalankan Aplikasi:

Terakhir, Anda dapat menjalankan aplikasi Laravel dengan perintah:

    php artisan serve
    
karena pakai tailwincss buka command baru jalankan perintah
    npm run dev
Aplikasi akan dijalankan di alamat default http://localhost:8000. Anda dapat mengaksesnya melalui web browser.


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
