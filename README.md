# Undangan Pernikahan Digital

Project ini berisi file untuk website undangan pernikahan digital.

## Struktur Project

- **`src/`**: Berisi seluruh kode sumber website.
  - `dian-elly.php`, `elly-dian.php`: Halaman utama undangan pernikahan untuk pasangan pengantin.
  - `ucapan_tamu.json`, `ucapan_tamu_boyong.json`: Penyimpanan data ucapan/kehadiran dari tamu (RSVP).
  - `assets/`: Folder berisi aset pendukung seperti gambar, musik latar, dan style.
- **`docker-compose.yml`**: Konfigurasi Docker untuk menjalankan server web lokal menggunakan PHP Apache.

## Cara Menjalankan Secara Lokal

Anda dapat menjalankan project ini menggunakan Docker Compose.

1. Pastikan **Docker** dan **Docker Compose** sudah terinstal di komputer Anda.
2. Jalankan perintah berikut di direktori utama project:
   ```bash
   docker compose up -d
   ```
3. Akses melalui browser pada alamat:
   - `http://localhost:8080/elly-dian.php`
   - `http://localhost:8080/dian-elly.php`

---
*Catatan: Anda juga bisa membukanya menggunakan server PHP lokal biasa jika tidak ingin menggunakan Docker.*
