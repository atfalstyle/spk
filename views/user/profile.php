<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="#">Data Profile</a></li>
	<li class="breadcrumb-item active">Detail Data Profile</li>
</ol>
<?php 
	if($tampil->jk == null || $tampil->tgl_lhr == null || $tampil->almt_asal == null || $tampil->almt_skrng == null || $tampil->no_hp == null || $tampil->status_nikah == null || $tampil->pendidikan == null || $tampil->jrsn == null):
		echo '<div class="alert alert-danger">Data Anda Belum Lengkap, Segera Lengkapi Data Anda <a href="">Disini</a></div>';
	endif;
?>
<div class="card mb-3">
	<div class="card-header"><i class="fa fa-user"></i> Detail Data Profile</div>
	<div class="card-body">
		<center>
			<p><b>Foto Profile</b></p>
			<img src="../../assets/img/karyawan/<?= $tampil->gbr; ?>" width="142">
		</center>
		<p>NIK : <b><?= $tampil->nik; ?></b></p>
		<p>Nama : <b><?= $tampil->nama; ?></b></p>
		<p>Jabatan : <b>Karyawan</b></p>
		<p>Jenis Jabatan : <b>
			<?php 
				$jns = $tampil->jns_jbt;
				if($jns == 1): 
          			echo "Staff"; 
          		elseif($jns == 2): 
          			echo "Koordinator";
          		elseif($jns == 3): 
          			echo "Supervisor";
          		elseif($jns == 4):
          			echo "Assistant Manager";
          		endif; 
			?>
				
		</b></p>
		<p>Jenis kelamin : <b><?= $tampil->jk; ?></b></p>
		<p>Tempat Lahir : <b><?= $tampil->tempat_lahir; ?></b></p>
		<p>Tanggal Lahir : <b><?= $tampil->tgl_lhr; ?></b></p>
		<p>Alamat Asal : <b><?= $tampil->almt_asal; ?></b></p>
		<p>Alamat Sekarang : <b><?= $tampil->almt_skrng; ?></b></p>
		<p>Nomor Handphone : <b><?= $tampil->no_hp; ?></b></p>
		<p>Email : <b><?= $tampil->email; ?></b></p>
		<p>Status Nikah : <b><?= $tampil->status_nikah; ?></b></p>
		<p>Pendidikan Terakhir : <b><?= $tampil->pendidikan; ?></b></p>
		<p>Jurusan : <b><?= $tampil->jrsn; ?></b></p>
		
		<a href="?kontent=profile&aksi=edit&id=<?= $_SESSION["user"] ?>" class="btn btn-sm btn-outline-success"><i class="fa fa-edit"></i> Edit Data</a>
	</div>
	<div class="card-footer small text-muted">Data Profile</div>
</div>