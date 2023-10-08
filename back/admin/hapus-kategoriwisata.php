<?php
include("koneksi.php");
$sql = "DELETE FROM tbkategoriwisata WHERE kdkategori='$_GET[id]'";
mysqli_query($con,$sql);
//echo $sql;
header ('location:kategori-wisata.php?delete=sukses');
?>