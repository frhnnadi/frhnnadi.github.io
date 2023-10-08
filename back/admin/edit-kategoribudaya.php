<?php $halaman = "kategori-budaya"; ?>
<?php include 'header.php'; ?>
<?php
include("koneksi.php");
$id = $_GET["id"];
$sql = "SELECT * FROM tbkategoribudaya WHERE kdkategori=$id";
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
		<a href="kategori-budaya.php" title="Back to Kategori" class="tip-bottom"><i class="icon-plane"></i> Kategori Budaya</a>
		<a class="current">Edit</a>
	</div>
    <h1>EDIT KATEGORI BUDAYA DI KALISALAK</h1>
</div>

<div class="container-fluid">
<hr>
  <div class="widget-box">
    <div class="widget-content nopadding">
	<form action="edit-kategoribudaya-act.php" method="post" class="form-horizontal">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		    <div class="control-group">
          <label class="control-label">KATEGORI :</label>
          <div class="controls">
            <input type="text" class="span5" name="kategori" value="<?php echo $kategori;?>" placeholder="Edit Kategori Budaya" />
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">KETERANGAN BUDAYA :</label>
            <div class="controls">
              <label>
                <input type="radio" name="ket" value="Budaya Kerajinan" <?php if($ket == 'Budaya Kerajinan'){ echo 'checked'; } ?>/>
                Budaya Kerajinan</label>
              <label>
                <input type="radio" name="ket" value="Budaya Kesenian" <?php if($ket == 'Budaya Kesenian'){ echo 'checked'; } ?> />
                Budaya Kesenian</label>
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