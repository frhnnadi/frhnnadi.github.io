<?php
include ("koneksi.php");
$sql = "UPDATE tbkategoribudaya SET 
			kategori = '$_POST[kategori]',
			ket = '$_POST[ket]'

		WHERE kdkategori='$_POST[id]'";

mysqli_query($con,$sql);
echo $sql;
header ('location:kategori-budaya.php?edit_kategori=sukses');
?>