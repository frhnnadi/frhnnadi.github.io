<?php
include ("koneksi.php");
$sql = "UPDATE tbkategoriwisata SET 
			kategori = '$_POST[kategori]',
			ket = '$_POST[ket]'

		WHERE kdkategori='$_POST[id]'";

mysqli_query($con,$sql);
echo $sql;
header ('location:kategori-wisata.php?edit_kategori=sukses');
?>