<?php
include "koneksi.php";
$nama = $_POST['nama'];
$email = $_POST['email'];
$noHp = $_POST['noHp'];
$semester = $_POST['semester'];
$ipk = $_POST['ipk'];
$beasiswa= $_POST['beasiswa'];
$berkas = $_FILES['berkas']['name'];
$tmp = $_FILES['berkas']['tmp_name'];
$path = "../image/".$berkas;

if(move_uploaded_file($tmp, $path)){
    $query = "INSERT INTO data(nama, email, noHp, semester, ipk,beasiswa, berkas) VALUES('".$nama."', '".$email."',
    '".$noHp."','".$semester."','".$ipk."','".$beasiswa."','".$berkas."')";
    $sql = mysqli_query($koneksi, $query); 
    if($sql){ 
        header("location: hasilPage.php"); // Redirect ke halaman index.php
    }else{
    // Jika Gagal, Lakukan :
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
    }
}else{
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='add.php'>Kembali Ke Form</a>";
}

?>