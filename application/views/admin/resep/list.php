<p>
	<a href="<?php echo base_url('admin/resep/tambah') ?>" class="btn btn-success btn-lg">
		<i class="fa fa-plus"></i> Tambah baru
	</a>
</p>

<?php 
// Notifikasi
if($this->session->flashdata('sukses')){
	echo '<p class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	// echo '</div>';
}
?>

<table class="table table-bordered" id="dataTable">
	<thead>
		<tr>
			<th class="col-auto">NO</th>
			<th class="col-auto">GAMBAR</th>
			<th class="col-auto">NAMA</th>
			<th class="col-auto">WAKTU</th>
			<th class="col-auto">PORSI</th>
			<th class="col-auto">HARGA</th>
			<th class="col-auto">FAVORIT</th>
			<th class="col-auto">DILIHAT</th>
			<th class="col-3">ACTION</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach($resep as $resep) {?>
		<tr>
			<td><?php echo $no ?></td>
			<td>
				<img src="<?php echo base_url('assets/img/thumbs/').$resep->gambar ?>" class="img img-responsive img-thumbnail" width=60 alt="">
			</td>
			<td><?php echo $resep->nama ?></td>
			<td><?php echo $resep->waktu_memasak ?></td>
			<td><?php echo $resep->porsi ?></td>
			<td><?php echo number_format($resep->harga,'0',',',',') ?></td>
			<td><?php echo $resep->favorit ?></td>
			<td><?php echo $resep->dilihat ?></td>
			<td>
				<a href="<?php echo base_url('admin/resep/detail/'.$resep->id) ?>" class="btn btn-primary btn-xs col-12"><i class="fa fa-eye"></i> Detail</a>

				<a href="<?php echo base_url('admin/resep/edit/'.$resep->id) ?>" class="btn btn-warning btn-xs col-12 mt-1"><i class="fa fa-edit"></i> Edit</a>

				<a href="<?php echo base_url('admin/resep/tambahbahanresep/'.$resep->id) ?>" class="btn btn-success btn-xs col-12 mt-1"><i class="fa fa-plus"></i> Bahan</a>

				<a href="<?php echo base_url('admin/resep/tambahstepresep/'.$resep->id) ?>" class="btn btn-info btn-xs col-12 mt-1"><i class="fa fa-plus"></i> Step</a>

				<?php include('delete.php') ?>
			</td>
		</tr>
		<?php $no++; } ?>
	</tbody>
</table>