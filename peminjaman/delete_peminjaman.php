<?php
include "../config/koneksi.php";
/* Mengambil nilai nim dari parameter get
yang dikirim dari tampil mahasiswa
*/
$id_pinjam=$_GET['id_pinjam'];
//Menjalankan kueri delete
$delete=mysqli_query($koneksi,"DELETE FROM peminjaman WHERE
id_pinjam='$_GET[id_pinjam]'");
if($delete){
    //Jika proses delete berhasil
    header("location:data_peminjaman.php");
}else{
    //Jika proses delete gagal
    echo"<p>Gagal Menghapus !</p>";
    echo"<a href='data_peminjaman.php'>Coba Lagi</a>";
}
?>