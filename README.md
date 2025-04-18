# GymGo: Gym Membership On-the-Go Web App System

![Laravel](https://img.shields.io/badge/Laravel-12-red?style=flat&logo=laravel)
![Filament](https://img.shields.io/badge/Filament-v3-blueviolet?style=flat&logo=laravel)
![MySQL](https://img.shields.io/badge/MySQL-Database-informational?style=flat&logo=mysql)


## Tentang Proyek
**GymGo** adalah sistem langganan gym berbasis web yang dibangun menggunakan Laravel 11, Filament PHP, dan pendekatan Service Repository Pattern. Aplikasi ini dirancang untuk memudahkan pengguna dalam mencari, memilih, dan melakukan pembayaran langganan gym secara online. 

## Fitur Utama
- 🚀 Membuat projek website langganan gym dari awal sampai selesai
- 🧠 Membuat CMS dan super admin dengan cepat dan efisien menggunakan Laravel Filament
- 🧩 Membangun struktur database berdasarkan desain ERD yang scalable
- 🔍 Fitur pencarian tempat gym untuk memudahkan pengguna
- 💳 Fitur berlangganan dan pembayaran paket gym yang terintegrasi
- 💼 Membangun portfolio proyek nyata sebagai bekal mencari pekerjaan

## Tech Stack
- Laravel 11
- Filament v3
- MySQL
- PHP 8+

## Cara Menjalankan Proyek
Berikut langkah-langkah menjalankan aplikasi ini di lokal Anda:

```bash
# 1. Clone Repository
https://github.com/Guruhg19/GymGo-Gym-Membership-On-the-Go-Web-App-System.git

# 2. Masuk ke direktori project
cd GymGo-Gym-Membership-On-the-Go-Web-App-System

# 3. Install dependency
composer install

# 4. Copy file .env dan atur konfigurasi database
cp .env.example .env

# 5. Generate APP_KEY
php artisan key:generate

# 6. Setup database (buat database baru di MySQL dan sesuaikan di .env)

# 7. Jalankan migrasi dan seeder (jika tersedia)
php artisan migrate --seed

# 8. Jalankan server lokal
php artisan serve

# 9. Akses melalui browser
http://localhost:8000
```

## Credits
Proyek ini dikembangkan sebagai bagian dari kelas online yang disediakan oleh BuildWithAngga untuk meningkatkan keterampilan Full-Stack Web Development dengan Laravel 11 dan Filament PHP.

---

**GymGo**: Modernisasi layanan gym dan kesehatan dengan teknologi.

---

