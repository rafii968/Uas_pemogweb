<?php
class Home extends Controller {
    public function index() {
        if (!isset($_SESSION['login'])) {
            header('Location: ' . BASEURL . '/auth');
            exit;
        }

        $data['judul'] = 'Dashboard Sejarah';
        $data['role'] = $_SESSION['role'];

        // Tampilan harus responsive (Mobile First) 
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}