<?php
include "../config/koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$id_pinjam_tmp=$_POST['id_pinjam_tmp'];
$id_pinjam=$_POST['id_pinjam'];
$identitas_peminjam=$_POST['identitas_peminjam'];
$judul_buku=$_POST['judul_buku'];
$tanggal_pinjam=$_POST['tanggal_pinjam'];
$batas_pinjam=$_POST['batas_pinjam'];
$jumlah=$_POST['jumlah'];
$tanggal_kembali=$_POST['tanggal_kembali'];
$status=$_POST['status'];


//Menjalankan kueri update
$update=mysqli_query($koneksi,"UPDATE peminjaman SET
id_pinjam='$id_pinjam',
identitas_peminjam='$identitas_peminjam',
judul_buku='$judul_buku',
tanggal_pinjam='$tanggal_pinjam',
batas_kembali='$batas_kembali',
jumlah='$jumlah',
tanggal_kembali='$tanggal_kembali',
status='$status'
WHERE id_pinjam='$id_pinjam_tmp'
");
if($update){
    //Jika proses delete berhasil
    header("location:data_peminjaman.php");
}else{
    //Jika proses update gagal
    echo"<p>Gagal Menyimpan !</p>";
    echo"<a href='data_peminjaman.php'>Coba Lagi</a>";
}
?>