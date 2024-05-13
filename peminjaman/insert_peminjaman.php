<?php
include "../config/koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$id_pinjam=$_POST['id_pinjam'];
$identitas_peminjam=$_POST['identitas_peminjam'];
$judul_buku=$_POST['judul_buku'];
$tanggal_pinjam=$_POST['tanggal_pinjam'];
$batas_pinjam=$_POST['batas_pinjam'];
$jumlah=$_POST['jumlah'];


//Menjalankan kueri insert
$insert=mysqli_query($koneksi,"INSERT INTO peminjaman
(id_pinjam,
identitas_peminjam,
judul_buku,
tanggal_pinjam,
batas_pinjam,
jumlah)
VALUES
('$_POST[id_pinjam]',
'$_POST[identitas_peminjam]',
'$_POST[judul_buku]',
'$_POST[tanggal_pinjam]',
'$_POST[batas_pinjam]',
'$_POST[jumlah]')
");
if($insert){
    //Jika proses delete berhasil
    header("location:data_peminjaman.php");
}else{
    //Jika proses delete gagal
    echo"<p>Gagal Menyimpan !</p>";
    echo"<a href='data_peminjaman.php'>Coba Lagi</a>";
}
?>