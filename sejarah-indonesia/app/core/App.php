<?php

class App {
    protected $controller = 'Auth'; // Default controller
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseURL();

        // 1. Cek Controller
        // Pastikan $url tidak null sebelum akses index 0
        if(isset($url[0])) {
            if( file_exists('../app/controllers/' . $url[0] . '.php') ) {
                $this->controller = $url[0];
                unset($url[0]);
            }
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // 2. Cek Method
        if( isset($url[1]) ) {
            if( method_exists($this->controller, $url[1]) ) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // 3. Ambil Params (Sisa dari URL)
        if( !empty($url) ) {
            $this->params = array_values($url);
        }

        // Jalankan controller & method, serta kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL() {
        if( isset($_GET['url']) ) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
        // Kembalikan array kosong jika url tidak ada agar tidak error saat di-isset
        return []; 
    }
}