<?php 
include 'config.php';

$id_pelanggan              =   $_POST['id_pelanggan'];
$nama_pelanggan            =   $_POST['nama_pelanggan'];
$alamat                    =   $_POST['alamat'];
$no_hp                     =   $_POST['no_hp'];
$jenis_layanan             =   $_POST['jenis_layanan'];
$masalah                   =   $_POST['masalah'];
$jumlah                    =   $_POST['jumlah'];
$merk                      =   $_POST['merk'];
$tanggal                   =   $_POST['tanggal'];
$waktu                     =   $_POST['waktu'];

$boking = "INSERT INTO pesanan (id_pelanggan, nama_pelanggan, alamat, no_hp, jenis_layanan, masalah, jumlah, merk, tanggal, waktu)
                VALUES ('$id_pelanggan', '$nama_pelanggan', '$alamat', '$no_hp', '$jenis_layanan', '$masalah', '$jumlah', '$merk', '$tanggal', '$waktu' )";

if(mysqli_query($koneksi, $boking)){
    header("location:berhasil-boking.php");
}
else
{
    header("location:gagal-boking.php");
}

?>


