<?php
include("koneksi.php");
mysqli_query($con, "INSERT INTO tbbudaya (
		nama,
		ket,
		lokasi,
		cover,
		waktu,
		tgl,
		kdkategori
		)
	VALUES (
	'$_POST[nama]',
	'$_POST[ket]',
	'$_POST[lokasi]',
	'$_POST[cover]',
	'$_POST[waktu]',
	'$_POST[tgl]',
	'$_POST[kdkategori]')");
header ('location:budaya.php?insert=sukses');
?>