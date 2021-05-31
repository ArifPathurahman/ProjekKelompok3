<!DOCTYPE html>
<html>
<head>
    <title>Tampil DataBase</title>
</head>
<body>
    <h1 align="center">Database</h1>
    
    <table border="10" align="center">
        <thead>
            <tr>
                <th>ID BAHAN</th>
                <th>NAMA BAHAN</th>
                <th>STOCK</th>
                <th>HARGA</th>
                <th>TANGGAL</th>
                <th>WAKTU</th>
            </tr>
        </thead>
        
        <?php
            include "koneksi1.php";
            $ambildata = mysqli_query($koneksi, "SELECT * FROM 03_tbowner ");
            while($tampil = mysqli_fetch_array($ambildata)){
                echo "
                <tr>
                    <td> $tampil[id_bahan]</td>
                    <td> $tampil[nama_bahan]</td>
                    <td> $tampil[stok]</td>
                    <td> $tampil[harga]</td>
                    <td> $tampil[tanggal]</td>
                    <td> $tampil[waktu]</td>

                </tr>";
            }
        ?>
        
    </table>

    <p>Klik <a href="from_inputdb.php" target = "_blank">Disini</a>Untuk Menambahkan Data</p>

</body>
</html>