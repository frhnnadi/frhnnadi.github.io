<?php $halaman = "kategori-wisata"; ?>
<?php include 'header.php'; ?>

<!--main-container-part-->
<div id="content">

<!--breadcrumbs-->
<div id="content-header">
	<div id="breadcrumb">
		<a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
		<a class="current"><i class="icon-group"></i>Travel Category</a> 
	</div>
    <h1>KATEGORI WISATA DI KALISALAK</h1><hr>
    <div class="container-fluid">
    <div class="col card-header text-right">
    <a style="margin-left:25px" data-toggle="modal" data-target="#myModal" class="btn btn-success icon-plus"></i>&nbsp Tambah Kategori</a>
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
					<th width="35%">Kategori</th>
					<th width="35%">Wisata</th>
					<th width="11%">Actions</th>
                </tr>
              </thead>
              <tbody>
<?php
$sql = "SELECT * FROM tbkategoriwisata ORDER BY kdkategori DESC";
$hsl = mysqli_query($con, $sql);
$nomor = 1;
while ($data=mysqli_fetch_array($hsl)) {
echo "<tr>";
echo "<td>$nomor</td>";
$id = $data["kdkategori"];
$kategori = $data["kategori"];
$ket = $data["ket"];
echo "<td>$kategori</td>";
echo "<td>$ket</td>";
echo "<td><a class='btn btn-warning icon-pencil' href='edit-kategoriwisata.php?id=$id'> </a> "; 
echo"<a class='btn btn-danger icon-remove' href='hapus-kategoriwisata.php?id=$id' onclick=\"return confirm('Apakah Yakin Data Ini Akan Dihapus?');\"> </a></td>";
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
				<h4 class="modal-title">KATEGORI WISATA</h4>
			</div>
			<div class="modal-body">
				<form action="tambah-kategoriwisata-act.php" method="post">
					<div class="control-group">
			          <label class="control-label">KATEGORI BARU :</label>
			          <div class="controls">
			            <input type="text" class="span5" name="kategori" placeholder="Masukan Kategori Baru" />
			          </div>
			        </div>
			        <div class="control-group">
			          <label class="control-label">WISATA :</label>
			          <div class="controls">
		                <label>
		                  <input type="radio" name="ket" value="Wisata Alam" />
		                  Wisata Alam</label>
		                <label>
		                  <input type="radio" name="ket" value="Wisata Edukasi" />
		                  Wisata Edukasi</label>
		              </div>
			        </div>
			</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal"> Cancel</button>
					<input type="submit" class="btn btn-primary" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>