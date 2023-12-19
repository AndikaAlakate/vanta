<?php
// proses_tambah_buku.php

include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $nama_buku = $_POST["nama_buku"];
    $penulis = $_POST["penulis"];
    $sinopsis = $_POST["sinopsis"];
    $ilustrasi = $_POST["ilustrasi"];
    $jumlah_chapter = $_POST["jumlah_chapter"];
    $folder_location = $_POST["folder_location"];
    $chapter = $_POST["chapter"];
    $genre = isset($_POST["genre"]) ? implode(", ", $_POST["genre"]) : '';

    // Pastikan judul buku valid untuk digunakan sebagai nama folder dan file
    $folder_name = $nama_buku;

    // Buat folder baru
    $folder_path = "../../buku/$folder_name";
    if (!file_exists($folder_path)) {
        mkdir($folder_path, 0755, true);
    }

    // Buat file index.php di dalam folder dengan konten HTML yang sesuai
    $index_content = "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>$nama_buku</title>
</head>
<body>
    <h1>$nama_buku</h1>
    <p>Penulis: $penulis</p>
    <p>Genre: $genre</p>
    <p>Sinopsis: $sinopsis</p>
    <!-- Tambahkan informasi buku lainnya sesuai kebutuhan -->
</body>
</html>";

    file_put_contents("$folder_path/index.php", $index_content);

    // Simpan data buku ke dalam database
    $sql = "INSERT INTO buku (nama_buku, penulis, sinopsis, folder_location, genre)
            VALUES ('$nama_buku', '$penulis', '$sinopsis', '$folder_name', '$genre')";

    if ($conn->query($sql) === TRUE) {
        // Redirect atau tampilkan pesan sukses
        header("Location: add_buku.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>