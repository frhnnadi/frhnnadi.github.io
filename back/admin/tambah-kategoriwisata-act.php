<?php
include("koneksi.php");
mysqli_query($con, "INSERT INTO tbkategoriwisata (
		kategori,
		ket
		)
	VALUES (
	'$_POST[kategori]',
	'$_POST[ket]')");
header ('location:kategori-wisata.php?insert_kategori=sukses');
?>