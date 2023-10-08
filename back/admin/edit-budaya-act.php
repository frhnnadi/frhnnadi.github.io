<?php
include ("koneksi.php");
$sql = "UPDATE tbbudaya SET 
			nama = '$_POST[nama]',
			lokasi = '$_POST[lokasi]',
			waktu = '$_POST[waktu]',
			tgl = '$_POST[tgl]',
			ket = '$_POST[ket]'

		WHERE kdbudaya='$_POST[id]'";

mysqli_query($con,$sql);
echo $sql;
header ('location:budaya.php?edit_budaya=sukses');
?>