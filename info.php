<?php
ob_start();
session_start();
require 'koneksi1.php';
// membuat variabel nama dan harga yang nilai diambil dari form tambah
    $id_bahan = $_POST['idbahan'];
    $nama_bahan = $_POST['idnama'];
    $stock = $_POST['stok'];
    $harga = $_POST['idharga'];
    $tanggal = $_POST['idtanggal'];
    $waktu = $_POST['idwaktu'];

// Pengkondisian untuk mengecek variabel harga dan nama memiliki value atau tidak
if($id_bahan=="" and $nama_bahan=="" and $harga=="" and $tanggal=="" and $waktu=="" and $stock == ""){
    echo "Data Belum Diisi ";
}elseif($id_bahan==""){
    // Pengkondisian untuk mengecek variabel nama memiliki value atau tidak
    echo "Data belum diisi";
}elseif($nama_bahan==""){
    // Pengkondisian untuk mengecek variabel harga memiliki value atau tidak
    echo "Data belum diisi";
}elseif($harga==""){
    // Pengkondisian untuk mengecek variabel nama memiliki value atau tidak
    echo "Data belum diisi";
}elseif($tanggal==""){
    // Pengkondisian untuk mengecek variabel nama memiliki value atau tidak
    echo "Data belum diisi";
}elseif($waktu==""){
    // Pengkondisian untuk mengecek variabel nama memiliki value atau tidak
    echo "Data belum diisi";
}
else{
    // jika kedua variabel tadi sudah terisi maka akan menjalankan code dibawah untuk merecord data yang sudah dinputkan
    $sql = "INSERT INTO `03_tbowner` (`id_bahan`, `nama_bahan`, `stok`, `harga`, `tanggal`, `waktu`)VALUES('$id_bahan','$nama_bahan','$stock','$harga','$tanggal','$waktu')";
    $result = $koneksi->query($sql);
    
}
?>
