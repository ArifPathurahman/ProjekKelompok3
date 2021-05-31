<?php
    $servername = "trunojoyopython.com";
    $username = "trunojoy_kuliah";
    $password = "unijoyo2021";
    $database= "trunojoy_hotel";

    $koneksi = new mysqli($servername, $username, $password, $database);

    if ($koneksi->connect_error) {
        die("Gagal mengkoneksikan" . $koneksi->connect_error);
    } else {
        echo "Berhasil Mengkoneksikan";
    }

    
?>

<html>
    <a href = "soal.php">Form Kasir</a>
</html>
