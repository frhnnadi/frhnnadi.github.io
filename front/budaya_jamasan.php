<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Budaya | Dinas Pariwisata & Kebudayaan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets3/img/dinas1.png" rel="icon">
  <link href="../assets3/img/dinas1.png" rel="dinas1-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets3/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets3/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets3/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets3/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets3/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets3/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets3/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">


  <!-- Main CSS File -->
  <link href="../assets3/css/style.css" rel="stylesheet">

</head>
<?php include 'koneksi.php'; ?>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php"><img src="../assets3/img/pesona-kalisalak-logo.png"></a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li class="dropdown">
            <a href="#"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="visi_misi.php">Visi & Misi</a></li>
              <li><a href="sejarah.php">Sejarah</a></li>
              <li><a href="tugas_fungsi.php">Tugas & Fungsi</a></li>
              <li><a href="struktur.php">Struktur Organisasi</a></li>
            </ul>
          <li class="dropdown">
            <a href="#"><span>Wisata Alam</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown">
                <a href="#"><span>Air Terjun</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="wisata_airterjun.php">Curug Song</a></li> 
                </ul>
              </li>
              <li class="dropdown">
                <a href="#">
                  <span>Telaga</span>
                  <i class="bi bi-chevron-right"></i>
                </a>
                <ul>
                  <li>
                    <a href="wisata_teleng.php">Telaga Anteng</a>
                  </li>
                </ul>
              <li class="dropdown">
                <a href="#">
                  <span>Bukit</span>
                  <i class="bi bi-chevron-right"></i>
                </a>
                <ul>
                  <li>
                    <a href="wisata_mbulu.php">Bukit Mbulu</a>
                  </li>
                </ul>
          </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Wisata Religi</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
              <li><a href="wisata_makam.php">Makam Karang Banar</a></li>
          </ul>

          <li class="dropdown"><a href="#"><span>Budaya</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li class="dropdown"><a href="#"><span>Budaya Kesenian</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="budaya_jamasan.php">Jamasan</a></li>
                </ul>
              </li>
          </ul>
          <li><a href="kontak.php">Contact Us</a></li>
          <li><a href="../back/index.php" class="getstarted">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Jamasan Pusaka</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Budaya</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

     <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title"><b>Budaya</b></h1>
                            <p>Kalisalak, Banyumas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog" class="padding-bottom">
      <div class="container">
                            <?php
                            $sql = "SELECT * from tbbudaya WHERE kdbudaya=8";
                            $hsl = mysqli_query($con, $sql);
                            while ($data=mysqli_fetch_array($hsl)) {
                            $id = $data["kdbudaya"];
                            $nama = $data["nama"];
                            $lokasi = $data["lokasi"];
                            $ket = $data["ket"];
                            $cover = $data["cover"];
                            $kdkategori = $data["kdkategori"];
                            $waktu = $data["waktu"];
                            $tgl = $data["tgl"];
                            ?>
                        <div class="single-blog-wrapper">
                                    <div class="post-thumb">
                                        <?php echo "<img src='images/wisata/$data[cover]' class='img-responsive' />";?>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a><b><?php echo "$nama";  ?></b></a></h2>
                                    <h3 class="post-author"><a>Dinas Pariwisata & Kebudayaan Desa Kali</a></h3>
                                    <p align="justify"><?php echo "$ket";  ?></p>
                                    <b>Lokasi : </b><a class="read-more"><?php echo "$lokasi";  ?></a>
                                    <div class="post-bottom overflow">
                                        <span class="comments-number pull-right"><a><?php echo "$tgl";  ?></a></span>
                                    </div>
                                </div>
                                </div> <?php } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>

  <div class="container">

        <h2><b><i>Video Jamasan Pusaka Kalisalak :</i></b></h2>
        <iframe width="1150" height="500" src="https://www.youtube.com/embed/23JrytwQZzw?si=TwJJO0T0Q3oqMuxd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p style="text-align: right;"></p>
      </div>

   <section id="map-section">
        <div class="container">
          <h2><b>Peta Budaya</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63285.14922654674!2d109.18415665444914!3d-7.539837023129695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6542dc943744fd%3A0x5027a76e3550b50!2sKalisalak%2C%20Kec.%20Kebasen%2C%20Kabupaten%20Banyumas%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1694967556112!5m2!1sid!2sid" width="1150" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="1150" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </section>


    <?php include 'footer.php'; ?>
