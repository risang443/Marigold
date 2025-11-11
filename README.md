# UGMarigold

## UGMarigold adalah aplikasi berbasis web yang dikembangkan menggunakan framework Laravel. Proyek ini dirancang untuk memberikan pengalaman pengembangan yang cepat, modern, dan efisien dengan struktur yang mudah dikembangkan serta dukungan berbagai fitur bawaan Laravel yang powerful.

## Panduan Instalasi

## Ikuti langkah-langkah berikut untuk menjalankan proyek UGMarigold di lingkungan lokal Anda:

### 1. Clone Repository

git clone [link_proyek_github]

### 2. Masuk ke Folder Proyek

cd [nama_folder_proyek]

### 3. Install Dependencies

composer install

### 4. Salin File Environment

cp .env.example .env  
 atau di Windows:  
 copy .env.example .env

### 5. Generate Application Key

php artisan key:generate

### 6. Migrasi Database

php artisan migrate

### 7. Isi Data Awal (Seeder)

php artisan db:seed

### 8. Jalankan Server Lokal menggunakan 2 terminal 
#### terminal 1
php artisan serve
#### terminal 2 
npm run dev

### 9. Akses Aplikasi di Browser

http://localhost:8000  
 atau  
 http://127.0.0.1:8000

Rekomendasi dan Saran  
Sebelum menjalankan proyek, pastikan lingkungan pengembangan Anda memenuhi persyaratan berikut:

Persyaratan Sistem

-   PHP versi 8.0 atau lebih baru
-   Composer versi terbaru
-   Database MySQL atau MariaDB
