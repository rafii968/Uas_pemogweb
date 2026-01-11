# Uas_pemogweb
MUHAMAD SAEFUL RAFII 312410374

# 1. Tahap Persiapan & Struktur Folder
Langkah awal adalah membangun struktur folder PHP MVC untuk memisahkan antara logika bisnis, tampilan, dan data:
Folder app: Berisi inti aplikasi (Core, Controllers, Models, Views, dan Config).
Folder public: Satu-satunya folder yang bisa diakses user, berisi index.php sebagai entry point dan aset (CSS, JS, Gambar).
File .htaccess: Mengatur routing agar semua URL diarahkan ke index.php sehingga URL menjadi bersih (Pretty URL).
<img width="435" height="766" alt="image" src="https://github.com/user-attachments/assets/cae68ddd-6e01-45dc-a37c-85296dec3b0f" />

# 2. Konfigurasi Sistem (Config & Core)
config.php: Mengatur konstanta BASEURL agar semua link bersifat dinamis dan mengatur kredensial database (DB_HOST, DB_USER, DB_PASS, DB_NAME).
App.php (Routing): Kelas ini bertugas membedah URL yang masuk. Misalnya url=auth/login, maka App.php akan mencari controller Auth dan menjalankan method login.
Controller.php: Kelas utama yang bertugas memanggil file View dan Model agar bisa digunakan oleh controller turunannya.
<img width="1919" height="729" alt="image" src="https://github.com/user-attachments/assets/0e2dae36-05d5-493c-99f3-10c8385c2868" />

# 3. Pembuatan Database & Model
Membuat database di MySQL dan mengimpor tabel users dan arsip_sejarah
Database.php: Menggunakan PDO (PHP Data Objects) untuk koneksi database agar lebih aman dari SQL Injection.
User_model.php: Berisi logika pengambilan data dari tabel database untuk divalidasi saat login.
<img width="1919" height="924" alt="image" src="https://github.com/user-attachments/assets/4a295ab3-5ce3-4cd3-9082-c712e50e00b8" />

# 4. Implementasi Logika (Controller & Auth)
Auth.php: Controller ini menangani proses masuk ke sistem.
Method index: Menampilkan halaman login.
Method prosesLogin: Menangkap data dari form, mencocokkannya dengan database (atau bypass bypass darurat), dan memulai session_start() jika data valid.
Home.php: Controller utama untuk menampilkan Dashboard setelah user berhasil login.

# 5. Pembuatan Tampilan (Views & Templates)
Memisahkan tampilan menjadi Templates (header.php dan footer.php) agar kode tidak ditulis berulang-ulang (Modular).
Menggunakan Framework Bootstrap agar tampilan web responsif dan rapi.
login.php: Form input untuk username dan password.
home/index.php: Halaman dashboard utama yang menyambut user.
<img width="1919" height="689" alt="image" src="https://github.com/user-attachments/assets/2ab50fba-c8a2-4b18-8b28-65b998b15405" />

Cara Kerja Sistem (Alur Eksekusi)
User mengakses URL: User membuka link web. Permintaan ditangkap oleh public/index.php.

Routing: Class App.php memproses URL dan menentukan Controller mana yang harus dipanggil.

Controller Action: Controller (misal: Auth) memproses data. Jika user melakukan login, Controller meminta data ke Model.

Data Handling: Model mengambil data dari database dan mengembalikannya ke Controller.

Rendering View: Controller mengirim data tersebut ke View (HTML) dan menampilkannya di browser user.
