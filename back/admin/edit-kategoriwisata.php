<?php $halaman = "kategori-wisata"; ?>
<?php include 'header.php'; ?>
<?php
include("koneksi.php");
$id = $_GET["id"];
$sql = "SELECT * FROM tbkategoriwisata WHERE kdkategori=$id";
$rpelanggan = mysqli_query($con,$sql);
$data = mysqli_fetch_array($rpelanggan);                                     
$kategori = $data["kategori"];
$ket = $data["ket"];
echo '';
?>

<!--main-container-part-->
<div id="content">
	<!--breadcrumbs-->
<div id="content-header">
	<div id="breadcrumb">
		<a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
		<a href="kategori-wisata.php" title="Back to Kategori" class="tip-bottom"><i class="icon-group"></i> Kategori Wisata</a>
		<a class="current">Edit</a>
	</div>
    <h1>EDIT KATEGORI WISATA DI KALISALAK</h1>
</div>

<div class="container-fluid">
<hr>
  <div class="widget-box">
    <div class="widget-content nopadding">
	<form action="edit-kategoriwisata-act.php" method="post" class="form-horizontal">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		    <div class="control-group">
          <label class="control-label">KATEGORI  :</label>
          <div class="controls">
            <input type="text" class="span5" name="kategori" value="<?php echo $kategori;?>" placeholder="Edit Kategori Wisata" />
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">KETERANGAN WISATA :</label>
            <div class="controls">
              <label>
                <input type="radio" name="ket" value="Wisata Alam" <?php if($ket == 'Wisata Alam'){ echo 'checked'; } ?>/>
                Wisata Alam</label>
              <label>
                <input type="radio" name="ket" value="Wisata Edukasi" <?php if($ket == 'Wisata Edukasi'){ echo 'checked'; } ?> />
                Wisata Edukasi</label>
            </div>
        </div>
        <div class="form-actions">
        	<div class="controls">
	          <a href="kategori-wisata.php" class="btn btn-danger col-md-2"> Back</a>
            <input type="submit" class="btn btn-primary" value="Save">
      		</div>
        </div>
	</form>
</div>
</div>
</div>
<!--End-breadcrumbs-->
</div>
<!--end-main-container-part-->
<?php include 'footer.php'; ?>