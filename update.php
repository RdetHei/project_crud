<?php
include 'connect.php';
$Id = $_POST['Id']; 
$NamaBuku = $_POST['editnama'];
$ISBN = $_POST['editisbn'];
$Genre = $_POST['editgenre'];
mysqli_query($koneksi, "UPDATE buku set Nama_Buku='$NamaBuku', ISBN='$ISBN', Genre='$Genre' where Id='$Id'");
header("location:anggota.php"); 
?>