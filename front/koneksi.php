<?php
$koneksi = mysqli_connect("localhost","root","","dbdisparbud");

//cek koneksi
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
else {
//echo "Koneksi berhasil";
}
//manipulasi koneksi.
?>
<?php
$server = "localhost";
$username = "root";
$password = "";
$database="dbdisparbud";

$con=mysqli_connect($server,$username,$password) or die("Koneksi Gagal");
mysqli_select_db($con,$database) or die ("Database Tidak Bisa Dibuka")
?>
