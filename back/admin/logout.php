<?php 
// mengaktifkan session
session_start();
 
// menghapus semua session
session_destroy();
echo "<script>alert('Anda Telah Keluar Dari Sistem Dinas Pariwisata & Kebudayaan Kabupaten Garut ini');document.location='index.php'</script>";