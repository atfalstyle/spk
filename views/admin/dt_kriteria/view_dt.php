<?php 
	$Model_all = new Model_all($dbs);
?>
<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="#">Data Kriteria</a></li>
	<li class="breadcrumb-item active">Lihat Data Kriteria</li>
</ol>

<div class="card mb-3">
	<div class="card-header"><i class="fa fa-user"></i> Data Kriteria</div>
	<div class="card-body">
		<div class="row">

			<div class="col-md-6">
				<p><b>Kriteria Pencapaian ( C1 )</b></p>
				<a href="?kontent=kriteria&aksi=tmb_c1" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Tambah Data"><i class="fa fa-plus"></i> Tambah Data</a>
				<br>
				<br>
			  	<div class="table-responsive">
				    <table class="table table-bordered" cellspacing="0">
				      <thead class="thead-dark">
				        <tr>
				          <th>No</th>
				          <th>Nama</th>
				          <th>Bobot</th>
				          <th>Aksi</th>
				        </tr>
				      </thead>
				      <tbody>
				      	<?php
				      		$no = 1;
				      		$views = $Model_all->get('c_pencapaian');
				      		while ($data = $views->fetch(PDO::FETCH_LAZY)) {
				      	?>
				        <tr>
				          <td><?= $no++; ?></td>
				          <td><?= $data->nama_c1; ?></td>
				          <td><?= $data->bobot_c1; ?></td>
				          <td>
				          	<a href="?kontent=kriteria&aksi=edit_c1&id=<?= $data->id_c1; ?>" class="btn btn-outline-success btn-sm" data-toggle="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-edit"></i></a>
				          	<a onclick="return confirm('Yakin Ingin Hapus Data..??')" href="<?= base_url(); ?>core/Route.php?route=delete_adm_crit_1&id=<?= $data->id_c1; ?>" class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Hapus Data"><i class="fa fa-trash-o"></i></a>
				          </td>
				        </tr>
				    	<?php } ?>
				      </tbody>
				    </table>
			  	</div>
			</div>

			<div class="col-md-6">
				<p><b>Kriteria Disiplin ( C2 )</b></p>
				<a href="?kontent=kriteria&aksi=tmb_c2" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Tambah Data"><i class="fa fa-plus"></i> Tambah Data</a>
				<br>
				<br>
			  	<div class="table-responsive">
				    <table class="table table-bordered" cellspacing="0">
				      <thead class="thead-dark">
						<tr>
				          <th>No</th>
				          <th>Nama</th>
				          <th>Bobot</th>
				          <th>Aksi</th>
				        </tr>
				      </thead>
				      <tbody>
				      	<?php
				      		$no = 1;
				      		$views = $Model_all->get('c_disiplin');
				      		while ($data = $views->fetch(PDO::FETCH_LAZY)) {
				      	?>
				        <tr>
				          <td><?= $no++; ?></td>
				          <td><?= $data->nama_c2; ?></td>
				          <td><?= $data->bobot_c2; ?></td>
				          <td>
				          	<a href="?kontent=kriteria&aksi=edit_c2&id=<?= $data->id_c2; ?>" class="btn btn-outline-success btn-sm" data-toggle="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-edit"></i></a>
				          	<a onclick="return confirm('Yakin Ingin Hapus Data..??')" href="<?= base_url(); ?>core/Route.php?route=delete_adm_crit_2&id=<?= $data->id_c2; ?>" class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Hapus Data"><i class="fa fa-trash-o"></i></a>
				          </td>
				        </tr>
				    	<?php } ?>
				      </tbody>
				    </table>
			  	</div>
			</div>

			<div class="col-md-6">
				<p><b>Kriteria Attitude ( C3 )</b></p>
				<a href="?kontent=kriteria&aksi=tmb_c3" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Tambah Data"><i class="fa fa-plus"></i> Tambah Data</a>
				<br>
				<br>
			  	<div class="table-responsive">
				    <table class="table table-bordered" cellspacing="0">
				      <thead class="thead-dark">
						<tr>
				          <th>No</th>
				          <th>Nama</th>
				          <th>Bobot</th>
				          <th>Aksi</th>
				        </tr>
				      </thead>
				      <tbody>
				      	<?php
				      		$no = 1;
				      		$views = $Model_all->get('c_attitude');
				      		while ($data = $views->fetch(PDO::FETCH_LAZY)) {
				      	?>
				        <tr>
				          <td><?= $no++; ?></td>
				          <td><?= $data->nama_c3; ?></td>
				          <td><?= $data->bobot_c3; ?></td>
				          <td>
				          	<a href="?kontent=kriteria&aksi=edit_c3&id=<?= $data->id_c3; ?>" class="btn btn-outline-success btn-sm" data-toggle="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-edit"></i></a>
				          	<a onclick="return confirm('Yakin Ingin Hapus Data..??')" href="<?= base_url(); ?>core/Route.php?route=delete_adm_crit_3&id=<?= $data->id_c3; ?>" class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Hapus Data"><i class="fa fa-trash-o"></i></a>
				          </td>
				        </tr>
				    	<?php } ?>
				      </tbody>
				    </table>
			  	</div>
			</div>

			<div class="col-md-6">
				<p><b>Kriteria Kompetensi ( C4 )</b></p>
				<a href="?kontent=kriteria&aksi=tmb_c4" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Tambah Data"><i class="fa fa-plus"></i> Tambah Data</a>
				<br>
				<br>
			  	<div class="table-responsive">
				    <table class="table table-bordered" cellspacing="0">
				      <thead class="thead-dark">
				        <tr>
				          <th>No</th>
				          <th>Nama</th>
				          <th>Bobot</th>
				          <th>Aksi</th>
				        </tr>
				      </thead>
				      <tbody>
				      	<?php
				      		$no = 1;
				      		$views = $Model_all->get('c_kompetensi');
				      		while ($data = $views->fetch(PDO::FETCH_LAZY)) {
				      	?>
				        <tr>
				          <td><?= $no++; ?></td>
				          <td><?= $data->nama_c4; ?></td>
				          <td><?= $data->bobot_c4; ?></td>
				          <td>
				          	<a href="?kontent=kriteria&aksi=edit_c4&id=<?= $data->id_c4; ?>" class="btn btn-outline-success btn-sm" data-toggle="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-edit"></i></a>
				          	<a onclick="return confirm('Yakin Ingin Hapus Data..??')" href="<?= base_url(); ?>core/Route.php?route=delete_adm_crit_4&id=<?= $data->id_c4; ?>" class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Hapus Data"><i class="fa fa-trash-o"></i></a>
				          </td>
				        </tr>
				    	<?php } ?>
				      </tbody>
				    </table>
			  	</div>
			</div>

		</div>
	</div>
	<div class="card-footer small text-muted">Data Kriteria</div>
</div>
