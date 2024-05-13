<?php
include "../config/koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$nis=$_POST['nis'];
$nama=$_POST['nama'];
$kelas=$_POST['kelas'];

//Menjalankan kueri insert
$insert=mysqli_query($koneksi,"INSERT INTO anggota
(nis,
nama,
kelas)
VALUES
('$_POST[nis]',
'$_POST[nama]',
'$_POST[kelas]')
");
if($insert){
    //Jika proses delete berhasil
    header("location:daftar_anggota.php");
}else{
    //Jika proses delete gagal
    echo"<p>Gagal Menyimpan !</p>";
    echo"<a href='daftar_anggota.php'>Coba Lagi</a>";
}
?>