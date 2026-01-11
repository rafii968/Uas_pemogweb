<?php
if( !session_id() ) session_start();

require_once '../app/init.php'; // Kita butuh file init untuk panggil semua core

$app = new App; // Menjalankan sistem routing