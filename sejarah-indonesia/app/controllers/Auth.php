<?php
class Auth extends Controller {
    public function index() {
        $this->view('auth/login');
    }

    public function prosesLogin() {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = $this->model('User_model')->getUserByUsername($username);

        if ($user) {
            // Cek password. Kalau di DB lo masih teks biasa, ini bakal tetep lolos
            if (password_verify($password, $user['password']) || $password == $user['password']) {
                $_SESSION['login'] = true;
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role']; // Sesuai aturan role admin/user [cite: 9]
                
                header('Location: ' . BASEURL . '/home');
                exit;
            } else {
                echo "<script>alert('Password Salah!'); window.location.href='".BASEURL."/auth';</script>";
            }
        } else {
            echo "<script>alert('User Tidak Ditemukan!'); window.location.href='".BASEURL."/auth';</script>";
        }
    }

    public function logout() {
        session_destroy();
        header('Location: ' . BASEURL . '/auth');
        exit;
    }
}