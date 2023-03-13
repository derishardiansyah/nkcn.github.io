<div class="container" id="map"></div>
<div class="container">
	<p class="text-right"><em>*Posisi tidak 100% akurat</em></p>
</div>
<p>&nbsp;</p>
<div id="test">
	<h5 class="text-center">Lembaga</h5>
	<div class="list-group">
		<?php foreach ($get_lembaga as $deskripsi) : ?>
			<!-- menampilkan data perkolom databse. isi sesuai dengan kolom pada tabel database -->
			<a href="<?php echo base_url('lembaga/deskripsi_lembaga/') . $deskripsi['id_deskripsi'] ?>" class="list-group-item"><?= $deskripsi["nama_lembaga"]; ?></a>
		<?php endforeach; ?>
	</div>
</div>
<div id="balai">
	<h5 class="text-center">UPT</h5>
	<div class="list-group">
		<?php foreach ($upt as $upt => $value) { ?>
			<!-- menampilkan data perkolom databse. isi sesuai dengan kolom pada tabel database -->
			<a href="<?php echo base_url('upt/deskripsi_upt/') . $value->id_upt ?>" class="list-group-item"><?= $value->nama_upt ?></a>
		<?php } ?>
	</div>
</div>

<p>&nbsp;</p>

</body>

</html>