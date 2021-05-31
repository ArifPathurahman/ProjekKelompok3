<!DOCTYPE html>
<?php
  session_start();
  if(!isset($_SESSION['Login'])) {
      include("from_inputdb.php");
  }
  else {}
?>
<html>
<head>
    <title>Input Stock Bahan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-top: 20px;">
<h3> TAMBAH BAHAN </h3>
<form action="info.php" method="POST">

    <div class="form-group">
        <label for="exampleInputEmail1">ID BARANG</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="idbahan">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">NAMA BARANG</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="idnama">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Stock</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="stok">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">HARGA</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="idharga">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">TANGGAL</label>
        <input type="date" class="form-control" id="exampleInputEmail1" name="idtanggal">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">WAKTU</label>
        <input type="time" class="form-control" id="exampleInputEmail1" name="idwaktu">
    </div>

    <button type="submit" class="btn btn-primary" value="Save" name="proses">Submit</button>
    <button type="submit" class="btn btn-warning" value="Form Kasir" name="proses"><a href = "perhitungan.php">Form Kasir</a></button>
    <button type="submit" class="btn btn-warning" value="Form Kasir" name="proses"><a href = "logout.php">Log Out</a></button>
</form>


<?php
include "koneksi1.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi,"insert into 03_tbowner set
    id_bahan = '$_POST[idbahan]',
    nama_bahan = '$_POST[idnama]',
    harga = '$_POST[idharga]'),
    tanggal = '$_POST[idtanggal]'),
    waktu = '$_POST[idwaktu]'");

    echo "Data Berhasil Tersimpan";
}
?>

</div>
</body>
</html>
