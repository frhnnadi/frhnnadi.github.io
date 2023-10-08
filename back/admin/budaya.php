<?php $halaman = "budaya"; ?>
<?php include 'header.php'; ?>

<!--main-container-part-->
<div id="content">

<!--breadcrumbs-->
<div id="content-header">
	<div id="breadcrumb">
		<a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
		<a class="current"><i class="icon-coffee"></i>Cultural</a> 
	</div> 
    <h1>DATA BUDAYA DI KALISALAK</h1><hr>
    <div class="container-fluid">
    <div class="col card-header text-right">
    <a style="margin-left:25px" data-toggle="modal" data-target="#myModal" class="btn btn-success icon-plus"></i>&nbsp Tambah Data Budaya</a>
    <div class="text-left">

    </div>
</div>
</div>
</div>

<div class="container-fluid">
	<div class="widget-box">
		<div class="widget-content nopadding">
      <table class="table table-bordered data-table" width="100%">
        <thead>
          <tr>
          			<th width="5%">No.</th>
					<th width="15%">Budaya</th>
					<th width="35%">Lokasi</th>
					<th width="10%">Kategori</th>
					<th width="18%">Actions</th>
          </tr>
        </thead>
        <tbody>
<?php
$sql = "SELECT * FROM tbbudaya ORDER BY kdbudaya DESC";
$hsl = mysqli_query($con, $sql);
$nomor = 1;
while ($data=mysqli_fetch_array($hsl)) {
echo "<tr>";
echo "<td>$nomor</td>";
$id = $data["kdbudaya"];
$nama = $data["nama"];
$lokasi = $data["lokasi"];
$waktu = $data["waktu"];
echo "<td>$nama</td>";
echo "<td>$lokasi</td>";
echo "<td>$waktu</td>";
echo "<td><a class='btn btn-primary icon-search' href='detail-budaya.php?id=$id'> </a> "; 
echo "<a class='btn btn-warning icon-pencil' href='edit-budaya.php?id=$id'> </a> ";
echo "<a class='btn btn-danger icon-remove' href='hapus-budaya.php?id=$id' onclick=\"return confirm('Apakah Yakin Mau Dihapus?');\"> </a></td>";
echo "</tr>";
	$nomor++;
}
?>
            </tbody>
          	</table>
      	</div>
	</div>
</div>
<!--End-breadcrumbs-->

</div>
<!--end-main-container-part-->

<!-- modal input -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">BUDAYA BARU</h4>
			</div>
			<div class="modal-body">
				<form action="tambah-budaya-act.php" method="post">
					<div class="control-group">
			          <label class="control-label">Budaya Baru :</label>
			          <div class="controls">
			            <input type="text" class="span5" name="nama" placeholder="Masukan Nama Budaya Baru" />
			            <input type="hidden" name="kdkategori" value="8"/>
			          </div>
			        </div>
			        <div class="control-group">
			          <label class="control-label">Lokasi :</label>
			          <div class="controls">
			            <textarea class="span5" name="lokasi" placeholder="Lokasi Wisata" ></textarea>
			          </div>
			        </div>
			        <div class="control-group">
			          <label class="control-label">Keterangan :</label>
			          <div class="controls">
			            <textarea class="span5" name="ket" placeholder="Artikel tentang keterangan Budaya" ></textarea>
			          </div>
			        </div>
			        <div class="control-group">
			          <label class="control-label">Foto Budaya :</label>
			          <div class="controls">
			            <input type="file" class="span5" name="cover" />
			          </div>
			        </div>
			        <div class="control-group">
			          <label class="control-label">Kategori :</label>
			          <div class="controls">
			            <input type="text" class="span5" name="waktu" placeholder="Pilih Kategori" />
			          	<input type="hidden" class="span5" name="tgl" value="<?php echo date('Y-m-d') ?>"/>
			        	</div>
			        </div>
			</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
					<input type="submit" class="btn btn-primary" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>