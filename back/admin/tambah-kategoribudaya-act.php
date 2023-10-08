<?php
include("koneksi.php");
mysqli_query($con, "INSERT INTO tbkategoribudaya (
		kategori,
		ket
		)
	VALUES (
	'$_POST[kategori]',
	'$_POST[ket]')");
header ('location:kategori-budaya.php?insert_kategori=sukses');
?>