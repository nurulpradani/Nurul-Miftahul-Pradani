<?php 
// koneksi database
include 'koneksi.php';
 

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
 if (!empty($nik) || !empty($nama) || !empty($alamat)) {
// menginput data ke database
mysqli_query($koneksi,"insert into vaksin values('','$nik','$nama','$alamat')");
 }
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>