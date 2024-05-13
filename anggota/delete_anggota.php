<?php
include "../config/koneksi.php";
/* Mengambil nilai nim dari parameter get
yang dikirim dari tampil mahasiswa
*/
$nis=$_GET['nis'];
//Menjalankan kueri delete
$delete=mysqli_query($koneksi,"DELETE FROM anggota WHERE
nis='$_GET[nis]'");
if($delete){
    //Jika proses delete berhasil
    header("location:daftar_anggota.php");
}else{
    //Jika proses delete gagal
    echo"<p>Gagal Menghapus !</p>";
    echo"<a href='daftar_anggota.php'>Coba Lagi</a>";
}
?>