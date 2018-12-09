<?php  
	$id = $_GET['id'];
	$Model_all = new Model_all($dbs);
	$views = $Model_all->show('dt_user','id_user',$id);
	$data = $views->fetch(PDO::FETCH_LAZY);
?>
<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="#">Akun</a></li>
	<li class="breadcrumb-item active">Edit Akun</li>
</ol>

<div class="card mb-3">
	<div class="card-header"><i class="fa fa-user"></i> Edit Akun</div>
	<div class="card-body">
		<form action="<?= base_url(); ?>" method="POST">
			<div class="row">
		      	<div class="col-md-6">
		      	  <div class="form-group">
		            <label for="user">Username</label>
		            <input type="hidden" name="id" value="<?= $data->id_user; ?>">
		            <input class="form-control" id="user" name="user" type="text" placeholder="Masukan Username" required="true" value="<?= $data->username; ?>">
		          </div>

		          <div class="form-group">
		            <label for="pass">Password</label>
		            <input class="form-control" id="pass" name="pass" type="text" placeholder="Masukan Password" required="true" value="<?= $data->pass_2; ?>">
		          </div>

		          <button type="submit" class="btn btn-outline-success btn-md"><i class="fa fa-edit"></i> Edit Data</button>
		      	</div>
          	</div>
        </form>
	</div>
	<div class="card-footer small text-muted">Edit Data User</div>
</div>
