<?php 
include 'koneksi.php';
$dana = $_POST['dana'];
$nama_lengkap = $_POST['nama_lengkap'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];

 
mysqli_query($koneksi,"INSERT INTO pasien VALUES('','$dana','$nama_lengkap','$no_hp','$email')");
 
header("location:index.php");
?>