<?php $halaman = "view"; ?>
<?php include 'header.php'; ?>

<!--main-container-part-->
<div id="content">

<!--breadcrumbs-->
<div id="content-header">
	<div id="breadcrumb">
		<a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
		<a class="current"><i class="icon-shopping-cart"></i>View</a> 
	</div> 
    <h1>WISATA & BUDAYA DI KALISALAK</h1>

</div>


<div class="container-fluid">
    <div class="row-fluid">
      <!--DATA PAKET-->
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title btn-info" data-toggle="collapse" href="#collapseG2"><span class="icon"><i class="icon-pencil"></i></span>
            <h5>Wisata-Wisata Desa Kalisalak</h5>
          </div>
          <div class="widget-content nopadding collapse in" id="collapseG2">
            <?php
            $sql = "SELECT * FROM tbwisata ORDER BY kdwisata DESC LIMIT 3";
            $hsl = mysqli_query($con, $sql);
            while ($data=mysqli_fetch_array($hsl)) {
            ?>
            <ul class="recent-posts">
              <li>
                <div class="article-post"><strong>Wisata <?php echo $data['wisata'] ?></strong>
                  <p>
                    <?php echo $data['lokasi'] ?>
                    <br><?php echo "<img src='../../front/images/wisata/$data[image]' />";?>
                    <br>Info Tiket : <b><?php echo $data['tiket'] ?></b>
                  </p>
                </div>
              </li>
              <?php 
              }
              ?>
            </ul>
          </div>
        </div>
      </div>

      <div class="span6">
        <div class="widget-box">
          <div class="widget-title bg_lv btn-info" data-toggle="collapse" href="#collapseG23"><span class="icon"><i class="icon-pencil"></i></span>
            <h5>Budaya-Budaya di Desa Kalisalak</h5>
          </div>
          <div class="widget-content nopadding collapse in" id="collapseG23">
            <?php
            $sql = "SELECT * FROM tbbudaya ORDER BY kdbudaya DESC LIMIT 3";
            $hsl = mysqli_query($con, $sql);
            while ($data=mysqli_fetch_array($hsl)) {
            ?>
            <ul class="recent-posts">
              <li>
                <div class="article-post"><strong><?php echo $data['nama'] ?></strong>
                  <p>
                    <?php echo $data['lokasi'] ?>
                    <br><?php echo "<img src='../../front/images/wisata/$data[cover]' />";?>
                    <br>Kategori : <b><?php echo $data['waktu'] ?></b>
                  </p>
                </div>
              </li>
              <?php 
              }
              ?>
            </ul>
          </div>
        </div>
      </div>
      <!--END DATA GUIDE TOUR-->
<hr/>
</div>
<!--End-Action boxes--> 

</div>
</div>


<?php include 'footer.php'; ?>