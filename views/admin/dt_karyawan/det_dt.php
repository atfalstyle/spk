<?php
	$id = $_GET['id'];
	$Model_all = new Model_all($dbs);
	$views = $Model_all->show('dt_karyawan','id_user',$id);
	$data = $views->fetch(PDO::FETCH_LAZY);
?>
<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="#">Data Karyawan</a></li>
	<li class="breadcrumb-item active">Detail Data Karyawan</li>
</ol>

<div class="card mb-3">
	<div class="card-header"><i class="fa fa-user"></i> Detail Data Karyawan</div>
	<div class="card-body">
		<center>
			<p><b>Foto Profile</b></p>
			<img src="<?= base_url(); ?>assets/img/karyawan/<?= $data->gbr; ?>" width="142">
		</center>
		<p>NIK : <b><?= $data->nik; ?></b></p>
		<p>Nama : <b><?= $data->nama; ?></b></p>
		<p>Jabatan : <b><?php if($data->jabatan == 2) { echo "Manager";} else{ echo "Karyawan Biasa";} ?></b></p>
		<p>Jenis Jabatan :
			<b>
				<?php 
					if($data->jns_jbt == 1): echo "Staff"; elseif($data->jns_jbt == 2): echo "Koordinator"; 
	          			elseif($data->jns_jbt == 3): echo "Supervisor"; elseif($data->jns_jbt == 4): echo "Assistant Manager"; else: echo "Manager";
	          		endif;  
	          	?>
			</b>
		</p>
		<p>Jenis kelamin : <b><?= $data->jk; ?></b></p>
		<p>Tempat Lahir : <b><?= $data->tempat_lahir; ?></b></p>
		<p>Tanggal Lahir : <b><?= $data->tgl_lhr; ?></b></p>
		<p>Alamat Asal : <b><?= $data->almt_asal; ?></b></p>
		<p>Alamat Sekarang : <b><?= $data->almt_skrng; ?></b></p>
		<p>Nomor Handphone : <b><?= $data->no_hp; ?></b></p>
		<p>Email : <b><?= $data->email; ?></b></p>
		<p>Status Nikah : <b><?= $data->status_nikah; ?></b></p>
		<p>Pendidikan Terakhir : <b><?= $data->pendidikan; ?></b></p>
		<p>Jurusan : <b><?= $data->jrsn; ?></b></p>

		<!-- <a href="?kontent=profile&aksi=edit&id=<?= $_SESSION["manager"] ?>" class="btn btn-sm btn-outline-success"> Edit Data</a> -->
	</div>
	<div class="card-footer small text-muted">Data Pofile</div>
</div>
