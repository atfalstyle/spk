<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="#">Data Profile</a></li>
	<li class="breadcrumb-item active">Detail Data Profile</li>
</ol>

<div class="card mb-3">
	<div class="card-header"><i class="fa fa-user"></i> Detail Data Profile</div>
	<div class="card-body">
		<center>
			<p><b>Foto Profile</b></p>
			<img src="<?= base_url(); ?>assets/img/karyawan/<?= $show->gbr; ?>" width="142">
		</center>
		<p>NIK : <b><?= $show->nik; ?></b></p>
		<p>Nama : <b><?= $show->nama; ?></b></p>
		<p>Email : <b><?= $show->email; ?></b></p>
		<p>Jabatan : <b>Admin</b></p>
		<p>Tempat Lahir : <b><?= $show->tempat_lahir; ?></b></p>

		<a href="?kontent=profile&aksi=edit&id=<?= $_SESSION["admin"] ?>" class="btn btn-sm btn-outline-success"><i class="fa fa-edit"></i> Edit Data</a>
	</div>
	<div class="card-footer small text-muted">Data Profile</div>
</div>
