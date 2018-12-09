<?php  
	$Model_all = new Model_all($dbs);
?>
<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="#">Data Karyawan</a></li>
	<li class="breadcrumb-item active">Lihat Data Karyawan</li>
</ol>

<p class="alert alert-info">Hai <?= $show->nama; ?> Perlu Kamu Tahu, Data Karyawan Terhubung Dengan Data User, Silahkan Edit Data Karyawan Yang Masih Kosong.</p>
<div class="card mb-3">
	<div class="card-header"><i class="fa fa-user"></i> Data Karyawan</div>
	<div class="card-body">
		<!-- <div class="col-md-12">
			<a href="?kontent=karyawan&aksi=tmb" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Tambah Data"><i class="fa fa-plus"></i> Tambah Data</a>
			<hr>
		</div> -->
	  	<div class="table-responsive">
		    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		      <thead class="thead-dark">
		        <tr>
		          <th width="7%">No</th>
		          <th>Nik</th>
		          <th>Nama</th>
		          <th>Jabatan</th>
		          <th>Jenis Jabatan</th>
		          <th>Jenis Kelamin</th>
		          <th>Gambar</th>
		          <th>Aksi</th>
		        </tr>
		      </thead>
		      <tbody>
		      	<?php  
		      		$no = 1;
		      		$views = $Model_all->get_order_asc('dt_karyawan','jns_jbt');
		      		while ($data = $views->fetch(PDO::FETCH_LAZY)) {
		      	?>
		        <tr>
		          <td><?= $no++; ?></td>
		          <td><?= $data->nik; ?></td>
		          <td><?= $data->nama; ?></td>
		          <td>
		          	<?php
		          		$lvl = $data->jabatan;
		          		if($lvl == 1):
		          			echo "Admin";
		          		elseif($lvl == 2):
		          			echo "Manager";
		          		elseif($lvl == 3):
		          			echo "Karyawan Biasa";
		          		endif; 
		          	?>		
		          </td>
		          <td>
		          	<?php
		          		$lvl = $data->jns_jbt;
		          		if($lvl == 1):
		          			echo "Staff";
		          		elseif($lvl == 2):
		          			echo "Koordinator";
		          		elseif($lvl == 3):
		          			echo "Supervisor";
		          		elseif($lvl == 4):
		          			echo "Assistant Manager";
		          		else:
		          			echo "Tidak Ada Jenis Jabatan";
		          		endif; 
		          	?>
		          </td>
		          <td><?= $data->jk; ?></td>
		          <td align="center"><img width="50" src="<?= base_url(); ?>/assets/img/karyawan/<?= $data->gbr; ?>"></td>
		          <td>
		          	<a href="?kontent=karyawan&aksi=det&id=<?= $data->id_user; ?>" class="btn btn-outline-info btn-sm" data-toggle="tooltip" data-placement="left" title="Lihat Data"><i class="fa fa-eye"></i></a>
		          	<a href="?kontent=karyawan&aksi=edit&id=<?= $data->id_user; ?>" class="btn btn-outline-success btn-sm" data-toggle="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-edit"></i></a>
		          </td>
		        </tr>
		    	<?php } ?>
		      </tbody>
		    </table>
	  	</div>
	</div>
	<div class="card-footer small text-muted">Data Karyawan</div>
</div>
