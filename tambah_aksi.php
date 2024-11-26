<?php 
// koneksi database
include 'connect.php';
// menangkap data yang di kirim dari form
$NamaBuku = $_POST['NamaBuku'];
$ISBN = $_POST['ISBN'];
$Genre = $_POST['Genre'];
// menginput data ke database
mysqli_query($koneksi,"INSERT into buku values('','$NamaBuku','$ISBN','$Genre')");
// mengalihkan halaman kembali ke index.php
header("location:anggota.php");
?>