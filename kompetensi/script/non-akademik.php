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
            <a href="" style="color: blue; font-weight: 900;">Daftar</a>
            <a href="hasilPage.php">Hasil</a>
        </ul>
    </div>
    <h2>Daftar Beasiswa Akademik</h2>
    <div class="formm">
        <fieldset>
            <form action="hasil.php" method="post" enctype="multipart/form-data">
                <label for="nama" class="label">Masukkan Nama</label>
                <input class="inp" type="text" name="nama" id="nama" require><br>
                <label for="email" class="label">Masukkan Email</label>
                <input class="inp" type="email" name="email" id="email" require><br>
                <label for="noHp" class="label" style="margin-right: 128px;">nomor Hp</label>
                <input class="inp" type="text" name="noHp" id="noHp" require><br>
                <label for="smstr" class="label">Semester saat ini</label>
                <select id="smstr" name="semester" class="inp" require>
                    <option value="0">Pilih:</option>
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
                <input class="inp" type="text" name="ipk" id="ipk" onchange="ipkInput(this.value)" disabled value="3.4" require><br>
                <label for="smstr" class="label">Pilihan Beasiswa</label>
                <select id="smstr" name="beasiswa" class="inp" >
                    <option value="0">Pilihan Beasiswa:</option>
                    <option value="Beasiswa Akademik">Beasiswa Akademik</option>
                    <option value="Beasiswa Non-Akademik">Beasiswa Non-Akademik</option>
                </select><br>
                <label for="berkas" class="label" style="margin-right: 30px;">Upload Berkas Syarat</label>
                <input class="inp" type="file" name="berkas" id="berkas" require><br>
                <div class="btn">
                    <input type="submit" id="submit" class="submit" value="Daftar">
                    <a class="submit1" href="index.php">Batal</a>
                </div>
            </form>
        </fieldset>
    </div>
    <script>
        const ipk = document.getElementById('ipk').value;
        const berkas = document.getElementById('berkas');
        const submit = document.getElementById('submit');

         
        function ipkInput(val){
            if(val < 3){
                
                submit.disabled = true;
                berkas.disabled = true;
            }else{
                submit.disabled = false;
                berkas.disabled = false;
            }
        }
        function loadValue(){
            if( ipk < 3){
                
                submit.disabled = true;
                berkas.disabled = true;
            }else{
                submit.disabled = false;
                berkas.disabled = false;
            }
        }
        
    </script>
</body>

</html>