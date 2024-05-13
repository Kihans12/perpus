<?php
include "../config/koneksi.php";
/* Mengambil nilai nim dari parameter get
yang dikirim dari tampil mahasiswa
*/
$id=$_GET['id'];
//Menjalankan kueri delete
$delete=mysqli_query($koneksi,"DELETE FROM buku WHERE
id='$_GET[id]'");
if($delete){
    //Jika proses delete berhasil
    header("location:data_buku.php");
}else{
    //Jika proses delete gagal
    echo"<p>Gagal Menghapus !</p>";
    echo"<a href='data_buku.php'>Coba Lagi</a>";
}
?>