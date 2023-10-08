<!DOCTYPE html>
<html lang="en">
<head>
  <?php 
  session_start();
  include 'cek.php';
  include 'koneksi.php';
  ?>
<title> Sistem Dinas Pariwisata & Kebudayaan</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
<link href="../../assets/images/logo2.png" rel="icon">
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/datepicker.css" />
<link rel="stylesheet" href="../css/uniform.css" />
<link rel="stylesheet" href="../css/select2.css" />
<link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../css/fullcalendar.css" />
<link rel="stylesheet" href="../css/matrix-style.css" />
<link rel="stylesheet" href="../css/matrix-media.css" />
<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="../css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>

<body>

   <style> #header h1 {
  background: url("../img/logo-kalisalak1.png") no-repeat scroll 0 0 transparent;
  height: 70px;
  left: 10px;
  line-height: 200px;
  overflow: hidden;
  position: relative;
  top: 10px;
  width: 110px;
} </style>

<!--Header-part-->
<div id="header">
  <h1><a href="index.php">Dinas Pariwisata & Kebudayaan Kabupaten kalisalak</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li class=""><a title="" href="#"><i class="icon icon-user"></i> <span class="text">Welcome <?php echo $_SESSION['nama']?>&nbsp</span></a></li>
    <li class=""><a title="" href="logout.php"><i class="icon icon-share-alt"></i> <span class="text">LOGOUT</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->

<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i>Dashboard</a>
  <ul>

    <li <?php if($halaman == "index") echo "class='active'"; ?>>
      <a href="index.php"><i class="icon icon-home"></i> <span>DASHBOARD</span></a></li>

    <!-- <li><a href="../../front/index.php"><i class="icon icon-user"></i> <span>WEBSITE</span></a></li> -->
    
    <li <?php if($halaman == "kategori-wisata") echo "class='active'"; ?>>
      <a href="kategori-wisata.php"><i class="icon icon-th-list"></i> <span>TRAVEL CATEGORY</span></a> </li>

    <li <?php if($halaman == "kategori-budaya") echo "class='active'"; ?>>
      <a href="kategori-budaya.php"><i class="icon icon-coffee"></i> <span>CULTURAL CATEGORY</span></a> </li>
      
    <li <?php if($halaman == "wisata") echo "class='active'"; ?>>
      <a href="wisata.php"><i class="icon icon-shopping-cart"></i> <span>TRAVEL DATA</span></a> </li>

    <li <?php if($halaman == "budaya") echo "class='active'"; ?>>
      <a href="budaya.php"><i class="icon icon-plane"></i> <span>CULTURAL DATA</span></a></li>

    <li <?php if($halaman == "view") echo "class='active'"; ?>>
      <a href="view.php"><i class="icon icon-ok"></i> <span>APPEARANCE</span></a></li>

    <li><a href="logout.php"><i class="icon icon-remove"></i> <span>LOGOUT</span></a></li>
    
  </ul>
</div>
<!--sidebar-menu-->