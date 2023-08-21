<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <ul class="nav">
            <a href="" style="color: blue; font-weight: 900;">Pilihan Beasiswa</a>
            <a href="akademik.php">Daftar</a>
            <a href="hasilPage.php">Hasil</a>
        </ul>
    </div>
    <H1>PILIH BEASISWA</H1>
    <div class="content">
        <div class="card">
            <div class="gambar">
                <img src="../image/OIP.jpg" alt="" style="width: 100%;">
            </div>
            <h3>Beasiswa Akademik</h3>
            <div class="in">
                <a href="akademik.php"><input type="button" value="Daftar"></a>
            </div>
        </div>
        <div class="card">
            <div class="gambar">
                <img src="../image/unduhan (14).jpg" alt="" style="width: 100%; height: 35vh;">
            </div>
            <h3>Beasiswa Non-Akademik</h3>
            <div class="in">
               <a href="non-akademik.php"> <input  type="button" value="Daftar"></a>
            </div>
        </div>

    </div>
</body>

</html>