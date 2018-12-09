<?php
	$id = $_GET['id'];
	$Model_all = new Model_all($dbs);
	$views = $Model_all->show('dt_user','id_user',$id);
	$data = $views->fetch(PDO::FETCH_LAZY);
?>
<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="#">Data Pribadi</a></li>
	<li class="breadcrumb-item active">Edit Data Pribadi</li>
</ol>

<div class="card mb-3">
	<div class="card-header"><i class="fa fa-user"></i> Edit Data Pribadi</div>
	<div class="card-body">
		<form action="<?= base_url(); ?>core/Route.php?route=adm_edit_profile" method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
		          <div class="form-group">
		            <label for="nik">NIK</label>
		            <input type="hidden" name="id" value="<?= $data->id_user; ?>">
		            <input class="form-control" id="nik" name="nik" type="number" placeholder="Masukan Nama" required="true" value="<?= $data->nik; ?>">
		          </div>

		          <div class="form-group">
		            <label for="nama">Nama User</label>
		            <input class="form-control" id="nama" name="nama" type="text" placeholder="Masukan Nama" required="true" value="<?= $data->nama; ?>">
		          </div>

		          <div class="form-group">
		            <label for="email">Email</label>
		            <input class="form-control" id="email" name="email" type="email" placeholder="Masukan Email" required="true" value="<?= $data->email; ?>">
		          </div>

		          <div class="form-group">
		            <label for="tmpt">Tempat Lahir</label>
		            <input class="form-control" id="tmpt" name="tmpt" type="text" placeholder="Masukan Tempat Lahir" required="true" value="<?= $data->tempat_lahir; ?>">
		          </div>
		          <div class="form-group">
		            <label for="user">Username</label>
		            <input class="form-control" id="user" name="user" type="text" placeholder="Masukan Username" required="true" value="<?= $data->username; ?>">
		          </div>

		          <div class="form-group">
		            <label for="pass">Password</label>
		            <input class="form-control" id="pass" name="pass" type="text" placeholder="Masukan Password" required="true" value="<?= $data->pass_2; ?>">
		          </div>

		      	</div>
		      	<div class="col-md-6">
		      	  <div class="form-group">
		            <label for="lvl">Level</label>
		            <select class="form-control" name="lvl">
		            	<option>-- Pilih Level --</option>
		            	<option value="1" <?php if($data->lvl == '1'){ echo "selected";} ?>>Admin</option>
		            	<option value="2" <?php if($data->lvl == '2'){ echo "selected";} ?>>Manager</option>
		            	<option value="3" <?php if($data->lvl == '3'){ echo "selected";} ?>>Karyawan</option>
		            </select>
		          </div>
		          <div class="form-group">
		          	<br>
		            <img src="../../assets/img/karyawan/<?= $data->gbr; ?>" width="142">
		            <br>
		            <label for="pict">Upload Foto</label>
		            <input class="form-control" type="file" name="gbr">
		          </div>

		      	</div>
		      	<div class="col-md-6">
	          		<button type="submit" class="btn btn-outline-success btn-md"><i class="fa fa-edit"></i> Edit Data</button>
	          	</div>
          	</div>
        </form>
	</div>
	<div class="card-footer small text-muted">Edit Data User</div>
</div>
