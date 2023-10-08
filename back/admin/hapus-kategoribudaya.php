<?php
include("koneksi.php");
$sql = "DELETE FROM tbkategoribudaya WHERE kdkategori='$_GET[id]'";
mysqli_query($con,$sql);
//echo $sql;
header ('location:kategori-budaya.php?delete=sukses');
?>