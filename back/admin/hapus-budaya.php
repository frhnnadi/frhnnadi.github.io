<?php
include("koneksi.php");
$sql = "DELETE FROM tbbudaya WHERE kdbudaya='$_GET[id]'";
mysqli_query($con,$sql);
//echo $sql;
header ('location:budaya.php?delete=sukses');
?>