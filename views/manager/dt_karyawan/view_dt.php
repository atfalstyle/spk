<?php  
	$Model_all = new Model_all($dbs);
?>
<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="#">Data Karyawan</a></li>
	<li class="breadcrumb-item active">Lihat Data Karyawan</li>
</ol>

<p class="alert alert-info">Hai <?= $show->nama; ?> Perlu Kamu Tahu Bahwa Data Karyawan Terhubung Dengan Data User</p>

<div class="card mb-3">
	<div class="card-header"><i class="fa fa-user"></i> Data Karyawan</div>
	<div class="card-body">
	  	<div class="table-responsive">
		    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		      <thead class="thead-dark">
		        <tr>
		          <th width="7%">No</th>
		          <th>Nik</th>
		          <th>Nama</th>
		          <th>Jenis Jabatan</th>
		          <th>Jenis Kelamin</th>
		          <th>Gambar</th>
		          <th>Aksi</th>
		        </tr>
		      </thead>
		      <tbody>
		      	<?php  
		      		$no = 1;
		      		$views = $Model_all->query('SELECT * FROM dt_karyawan WHERE jabatan = 3 ORDER BY jns_jbt ASC');
		      		while ($data = $views->fetch(PDO::FETCH_LAZY)) {
		      	?>
		        <tr>
		          <td><?= $no++; ?></td>
		          <td><?= $data->nik; ?></td>
		          <td><?= $data->nama; ?></td>
		          <td>
		          	<?php
		          		$jns = $data->jns_jbt;
		          		if($jns == 1): 
		          			echo "Staff | <a href='?kontent=karyawan&aksi=edit_jbt&id=$data->id_user' class='btn btn-outline-success btn-sm'> Edit Jenis Jabatan</a>"; 
		          		elseif($jns == 2): 
		          			echo "Koordinator | <a href='?kontent=karyawan&aksi=edit_jbt&id=$data->id_user' class='btn btn-outline-success btn-sm'> Edit Jenis Jabatan</a>";
		          		elseif($jns == 3): 
		          			echo "Supervisor | <a href='?kontent=karyawan&aksi=edit_jbt&id=$data->id_user' class='btn btn-outline-success btn-sm'> Edit Jenis Jabatan</a>";
		          		elseif($jns == 4):
		          			echo "Assistant Manager | <a href='?kontent=karyawan&aksi=edit_jbt&id=$data->id_user' class='btn btn-outline-success btn-sm'> Edit Jenis Jabatan</a>";
		          		else:
		          			echo "Tidak Ada Jenis Jabatan | <a href='?kontent=karyawan&aksi=edit_jbt&id=$data->id_user' class='btn btn-outline-success btn-sm'> Edit Jenis Jabatan</a>";
		          		endif; 
		          	?>		
		          </td>
		          <td><?php echo $data->jk; ?></td>
		          <td align="center"><img width="50" src="<?= base_url(); ?>assets/img/karyawan/<?= $data->gbr; ?>"></td>
		          <td align="center">
		          	<a href="?kontent=karyawan&aksi=det&id=<?= $data->id_user; ?>" class="btn btn-outline-info btn-sm" data-toggle="tooltip" data-placement="left" title="Lihat Data"><i class="fa fa-eye"></i></a>
		          </td>
		        </tr>
		        <?php } ?>
		      </tbody>
		    </table>
	  	</div>
	</div>
	<div class="card-footer small text-muted">Data Karyawan</div>
</div>
