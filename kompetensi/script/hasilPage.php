<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/beasiswa.css">
    <title>Document</title>
</head>

<body onload="loadValue()">
    <div class="container">
        <ul class="nav">
            <a href="index.php">Pilihan Beasiswa</a>
            <a href="akademik.php">Daftar</a>
            <a href=""  style="color: blue; font-weight: 900;">Hasil</a>
        </ul>
    </div>
    <h2>Status Pengajuan : Sedang Diverifikasi!</h2>
    <div class="formm">
        <fieldset>
            <form action="hasil.php" method="post" enctype="multipart/form-data">
                <?php 
                include "koneksi.php";
                $query = "SELECT * FROM data";
                $sql = mysqli_query($koneksi, $query);
                while ($data = mysqli_fetch_array($sql)) :
                ?>
                <label for="nama" class="label">Masukkan Nama</label>
                <input class="inp" type="text" name="nama" id="nama" disabled  value="<?php echo $data['nama'] ?>"><br>
                <label for="email" class="label">Masukkan Email</label>
                <input class="inp" type="email" name="email" id="email" disabled value="<?php echo $data['email'] ?>"><br>
                <label for="noHp" class="label" style="margin-right: 128px;">nomor Hp</label>
                <input class="inp" type="number" name="noHP" id="noHp" disabled value="<?php echo $data['noHp'] ?>"><br>
                <label for="smstr" class="label">Semester saat ini</label>
                <select id="smstr" name="semester" class="inp" disabled require>
                    <option value="0"><?php echo $data['semester'] ?></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select><br>
                <label for="ipk" class="label" style="margin-right: 110px;">IPK terakhir</label>
                <input class="inp" type="text" name="ipk" id="ipk" disabled  value="<?php echo $data['ipk'] ?>"><br>
                <label for="smstr" class="label">Pilihan Beasiswa</label>
                <select id="smstr" name="beasiswa" class="inp" disabled >
                    <option value="0"><?php echo $data['beasiswa'] ?></option>
                    <option value="Beasiswa Akademik">Beasiswa Akademik</option>
                    <option  value="Beasiswa Non-Akademik">Beasiswa Non-Akademik</option>
                </select><br>
                <label for="berkas" class="label" style="margin-right: 30px;">Upload Berkas Syarat</label>
                <input class="inp" type="file" name="berkas" id="berkas" disabled value="<?php echo $data['berkas'] ?>"><br>
                <?php endwhile ?>
            </form>
        </fieldset>
    </div>
   
</body>

</html>