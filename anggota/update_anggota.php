<?php
include "../config/koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$nis_tmp=$_POST['nis_tmp'];
$nis=$_POST['nis'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$kelas=$_POST['kelas'];


//Menjalankan kueri update
$update=mysqli_query($koneksi,"UPDATE anggota SET
nis='$nis',
nama='$nama',
jenis_kelamin='$jenis_kelamin',
kelas='$kelas'
WHERE nis='$nis_tmp'
");
if($update){
    //Jika proses delete berhasil
    header("location:daftar_anggota.php");
}else{
    //Jika proses update gagal
    echo"<p>Gagal Menyimpan !</p>";
    echo"<a href='daftar_anggota.php'>Coba Lagi</a>";
}
?>