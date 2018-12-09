<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="#">Data Profile</a></li>
	<li class="breadcrumb-item active">Detail Data Profile</li>
</ol>
<?php 
	if($show->jk == null || $show->tgl_lhr == null || $show->almt_asal == null || $show->almt_skrng == null || $show->no_hp == null || $show->status_nikah == null || $show->pendidikan == null || $show->jrsn == null):
		echo '<div class="alert alert-danger">Data Anda Belum Lengkap, Segera Lengkapi Data Anda <a href="?kontent=profile&aksi=edit&id='.$_SESSION["manager"].'">Disini</a></div>';
	endif;
?>
<div class="card mb-3">
	<div class="card-header"><i class="fa fa-user"></i> Detail Data Profile</div>
	<div class="card-body">
		<center>
			<p><b>Foto Profile</b></p>
			<img src="../../assets/img/karyawan/<?= $show->gbr; ?>" width="142">
		</center>
		<p>NIK : <b><?= $show->nik; ?></b></p>
		<p>Nama : <b><?= $show->nama; ?></b></p>
		<p>Jabatan : <b>Manager</b></p>
		<p>Jenis kelamin : <b><?= $show->jk; ?></b></p>
		<p>Tempat Lahir : <b><?= $show->tempat_lahir; ?></b></p>
		<p>Tanggal Lahir : <b><?= $show->tgl_lhr; ?></b></p>
		<p>Alamat Asal : <b><?= $show->almt_asal; ?></b></p>
		<p>Alamat Sekarang : <b><?= $show->almt_skrng; ?></b></p>
		<p>Nomor Handphone : <b><?= $show->no_hp; ?></b></p>
		<p>Email : <b><?= $show->email; ?></b></p>
		<p>Status Nikah : <b><?= $show->status_nikah; ?></b></p>
		<p>Pendidikan Terakhir : <b><?= $show->pendidikan; ?></b></p>
		<p>Jurusan : <b><?= $show->jrsn; ?></b></p>
		
		<a href="?kontent=profile&aksi=edit&id=<?= $_SESSION["manager"] ?>" class="btn btn-sm btn-outline-success"><i class="fa fa-edit"></i> Edit Data</a>
	</div>
	<div class="card-footer small text-muted">Data Pofile</div>
</div>