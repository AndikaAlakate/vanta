<?php
    $server = 'localhost';
    $user = 'gadakst2_andikaalakate';
    $pass = 'mraouart46710_~';
    $db = 'gadakst2_vanta';

    $conn = new mysqli($server, $user, $pass, $db);

    if ($conn->connect_error) {
        die('Koneksi Gagal : '. $conn->connect_error);
    }
?>