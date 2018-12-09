<?php  
	$id = $_GET['id'];
	$Model_all = new Model_all($dbs);
	$views = $Model_all->show('dt_karyawan','id_user',$id);
	$data = $views->fetch(PDO::FETCH_LAZY);
?>
<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="#">Data Jenis Jabatan</a></li>
	<li class="breadcrumb-item active">Edit Data Jenis Jabatan</li>
</ol>

<div class="card mb-3">
	<div class="card-header"><i class="fa fa-user"></i> Edit Data Jenis Jabatan</div>
		<div class="card-body">
			<form action="" method="POST" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-6">
					  <div class="form-group">
			            <label for="nama">Nama</label>
			            <input class="form-control" readonly="true" id="nama" required="true" name="nama" type="text" placeholder="Masukan Nama Lengkap" value="<?= $data->nama; ?>">
			          </div>
			          <div class="form-group">
			            <label for="jns_jbt">Jenis Jabatan</label>
			            <input type="hidden" name="id" value="<?= $data->id_user; ?>">
			            <select class="form-control" name="jns_jbt">
			            	<option>-- Pilih Jenis Jabatan --</option>
			            	<option value="1" <?php if($data->jns_jbt == '1'){ echo "selected";} ?> >Staff</option>
			            	<option value="2" <?php if($data->jns_jbt == '2'){ echo "selected";} ?> > Koordinator</option>
			            	<option value="3" <?php if($data->jns_jbt == '3'){ echo "selected";} ?> > Supervsisor</option>
			            	<option value="4" <?php if($data->jns_jbt == '4'){ echo "selected";} ?> >Assistant Manager</option>
			            </select>
			          </div>

			          <button type="submit" class="btn btn-outline-success btn-md"><i class="fa fa-edit"></i> Edit Data</button>
			      	</div>
	          	</div>
        	</form>
		</div>
	<div class="card-footer small text-muted">Edit Data Jenis Jabatan</div>
</div>
