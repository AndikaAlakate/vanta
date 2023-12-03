<?php
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'vanta';

    $conn = new mysqli($server, $user, $pass, $db);

    if ($conn->connect_error) {
        die('Koneksi Gagal : '. $conn->connect_error);
    }
?>