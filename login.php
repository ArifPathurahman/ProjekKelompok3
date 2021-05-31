<?php
    ob_start();
    session_start();
    include "koneksi1.php";
    $user        = $_POST['id_admin'];
    $pass    = $_POST['password'];
    $_SESSION['id_admin'] = $user;
    $sql = "SELECT * FROM 03_tblogin where id_admin ='$user'";
    $qry = mysqli_query($koneksi, $sql);
    $num = mysqli_num_rows($qry);
    $row = mysqli_fetch_array($qry);

    if ($num==0 OR $pass!=$row['password']) {
    ?>
        <script language="JavaScript">
            alert('Username atau Password tidak sesuai !');
            document.location='index.php';
        </script>
    <?php
    }
    else {
        $_SESSION['Login']=1;
        header("Location: from_inputdb.php");
    }
    mysql_close($Open); //Tutup koneksi engine MySQL
?>