<?php 
	$Model_all = new Model_all($dbs);
?>
<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="#">Data User</a></li>
	<li class="breadcrumb-item active">Lihat Data User</li>
</ol>
<div class="alert alert-info alert-dismissable">
	Data User Terhubung Dengan Data Karyawan Atau Manager, Ketika Menginputkan Data User Otomatis Menginputkan Data Karyawan, Tapi Belum Lengkap.</div>
<div class="card mb-3">
	<div class="card-header"><i class="fa fa-user"></i> Data User</div>
	<div class="card-body">
		<div class="col-md-12">
			<a href="?kontent=user&aksi=tmb" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Tambah Data"><i class="fa fa-plus"></i> Tambah Data</a>
			<hr>
		</div>
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
		      		$views = $Model_all->get_order_asc('dt_karyawan','jabatan');
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
		          <td><?php echo $data->jk; ?></td>
		          <td align="center"><img width="50" src="<?= base_url(); ?>assets/img/karyawan/<?= $data->gbr; ?>"></td>
		          <td>
		          	<a href="?kontent=user&aksi=edit&id=<?= $data->id_user; ?>" class="btn btn-outline-success btn-sm" data-toggle="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-edit"></i></a>
		          	<a onclick="return confirm('Yakin Ingin Hapus Data..??')" href="<?= base_url(); ?>core/Route.php?route=delete_adm_user&id=<?= $data->id_user; ?>" class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Hapus Data"><i class="fa fa-trash-o"></i></a>
		          </td>
		        </tr>
		        <?php } ?>
		      </tbody>
		    </table>
	  	</div>
	</div>
	<div class="card-footer small text-muted">Data User</div>
</div>
