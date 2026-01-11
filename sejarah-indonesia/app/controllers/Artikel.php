<?php

class Artikel extends Controller {
    
    public function index($page = 1) {
        $page = (int)$page; 
        if ($page <= 0) $page = 1;

        $limit = 5; 
        $offset = ($page - 1) * $limit;
        
        $data['judul'] = 'Daftar Sejarah Indonesia';
        $data['artikel'] = $this->model('Artikel_model')->getAllArtikel($limit, $offset);
        
        $totalArtikel = $this->model('Artikel_model')->countArtikel();
        $data['total_page'] = ceil($totalArtikel / $limit);
        $data['current_page'] = $page;

        $this->view('templates/header', $data);
        $this->view('artikel/index', $data);
        $this->view('templates/footer');
    }

    public function cari() {
        $data['judul'] = 'Hasil Pencarian Sejarah';
        $data['artikel'] = $this->model('Artikel_model')->cariDataArtikel($_POST['keyword']);
        $data['is_search'] = true; 

        $this->view('templates/header', $data);
        $this->view('artikel/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id) {
        $data['judul'] = 'Detail Sejarah';
        $data['artikel'] = $this->model('Artikel_model')->getArtikelById($id);
        
        $this->view('templates/header', $data);
        $this->view('artikel/detail', $data);
        $this->view('templates/footer');
    }

    // --- FITUR CRUD ADMIN ---
    
    public function tambah() {
        if ($_SESSION['role'] !== 'admin') {
            header('Location: ' . BASEURL . '/artikel');
            exit;
        }
        $data['judul'] = 'Tambah Sejarah';
        $this->view('templates/header', $data);
        $this->view('artikel/tambah');
        $this->view('templates/footer');
    }

    public function simpan() {
        if ($this->model('Artikel_model')->tambahDataArtikel($_POST) > 0) {
            header('Location: ' . BASEURL . '/artikel');
            exit;
        }
    }

    // METHOD BARU: Nampilin form edit dengan data lama
    public function ubah($id) {
        if ($_SESSION['role'] !== 'admin') {
            header('Location: ' . BASEURL . '/artikel');
            exit;
        }
        $data['judul'] = 'Ubah Sejarah';
        $data['artikel'] = $this->model('Artikel_model')->getArtikelById($id);
        
        $this->view('templates/header', $data);
        $this->view('artikel/ubah', $data);
        $this->view('templates/footer');
    }

    // METHOD BARU: Proses simpan perubahan ke DB
    public function prosesUbah() {
        if ($this->model('Artikel_model')->ubahDataArtikel($_POST) > 0) {
            header('Location: ' . BASEURL . '/artikel');
            exit;
        } else {
            // Tetap pindah halaman kalaupun user gak ngerubah apa-apa
            header('Location: ' . BASEURL . '/artikel');
            exit;
        }
    }

    public function hapus($id) {
        if ($_SESSION['role'] !== 'admin') {
            header('Location: ' . BASEURL . '/artikel');
            exit;
        }
        if ($this->model('Artikel_model')->hapusDataArtikel($id) > 0) {
            header('Location: ' . BASEURL . '/artikel');
            exit;
        }
    }
}