<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Telaga | Dinas Pariwisata & Kebudayaan</title>
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
          <h2>Wisata Alam</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Air Terjun</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->


<?php
error_reporting(0);
include("koneksi.php");
echo '
      <!-- Default box -->
      <div class="box">
        <div class="box-body">
';
?>
<?php
$sql = "SELECT * from tbwisata INNER JOIN tbkategoriwisata ON(tbwisata.kdkategori = tbkategoriwisata.kdkategori) INNER JOIN tbdetailwisata ON(tbwisata.kdwisata = tbdetailwisata.kdwisata) WHERE tbwisata.kdkategori=6";
$hsl = mysqli_query($con, $sql);
while ($data=mysqli_fetch_array($hsl)) {
echo "<tr>";
$id = $data["kdwisata"];
$wisata = $data["wisata"];
$lokasi = $data["lokasi"];
$ket1 = $data["ket1"];
$ket2 = $data["ket2"];
$image = $data["image"];
$akses = $data["akses"];
$waktu = $data["waktu"];
$tiket = $data["tiket"];
$kategori = $data["kategori"];
$g1 = $data["g1"];
$g2 = $data["g2"];
$g3 = $data["g3"];
$g4 = $data["g4"];
?>  
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title"><b><?php echo "$kategori";  ?></b></h1>
                            <p><?php echo "$wisata";  ?>, kalisalak.</p>
                        </div>
                     </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

    <section id="company-information" class="padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p style="text-align: justify"><?php echo "$ket1";  ?></p>
                    <p style="text-align: justify"><?php echo "$ket2";  ?></p>
                </div>
                <div class="col-sm-6">
                    <?php echo "<img src='images/wisata/$data[image]' class='img-responsive' />";?>
                </div>
                
            </div>
        </div>
    </section>

    <section id="team">
        <div class="container">
            <div class="row">
                <h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms"><b>Galeri Wisata</b></h1>
                <p class="text-center wow fadeInDown" data-wow-duration="400ms" data-wow-delay="400ms"> Kumpulan foto dari <?php echo "$wisata";?></p>
                <div id="team-carousel" class="carousel slide wow fadeIn" data-ride="carousel" data-wow-duration="400ms" data-wow-delay="400ms">
                    <!-- Indicators -->
                    <ol class="carousel-indicators visible-xs">
                        <li data-target="#team-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#team-carousel" data-slide-to="1"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                            <?php echo "<img src='images/wisata/$data[g1]' class='img-responsive' />";?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                            <?php echo "<img src='images/wisata/$data[g2]' class='img-responsive' />";?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                            <?php echo "<img src='images/wisata/$data[g3]' class='img-responsive' />";?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                            <?php echo "<img src='images/wisata/$data[g4]' class='img-responsive' />";?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="images/home/lokasi.png" alt="">
                        </div>
                        <h2><b>Lokasi <br> Wisata</b></h2>
                        <p style="text-align: justify"><?php echo "$lokasi";?></p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="images/home/motor.png" alt="">
                        </div>
                        <h2><b>Akses <br> Wisata</b></h2>
                        <p style="text-align: justify"><?php echo "$akses";?></p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="images/home/tiket.png" alt="">
                        </div>
                        <h2><b>Jam & Tiket <br> Wisata </b></h2>
                        <p style="text-align: justify">Buka <?php echo "$waktu";?>, setiap hari.<br>Dan tiket <?php echo "$tiket";?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <h2><b><i>Video Telaga Anteng :</i></b></h2>
        <iframe width="1150" height="500" src="https://www.youtube.com/embed/9p6BO3h7Q3w?si=lQ31ukF08AG2ywRf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <p style="text-align: right;"></p>
      </div>

    <section id="map-section">
        <div class="container">
          <h2><b>Peta Wisata</h2>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.2916738446315!2d109.2151374750025!3d-7.543136292470333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65431b1aa63a17%3A0xb62280b97e170507!2sWisata%20TELENG%20-%20Telaga%20Anteng!5e0!3m2!1sid!2sid!4v1696416363251!5m2!1sid!2sid" width="1150" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="1150" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </section>
    <!--/#services-->

    </main>

    <!--/#team-->
<?php } ?>
<?php include 'footer.php'; ?>