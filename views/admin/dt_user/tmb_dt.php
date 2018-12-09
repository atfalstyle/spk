<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="#">Data User</a></li>
	<li class="breadcrumb-item active">Tambah Data User</li>
</ol>

<div class="card mb-3">
	<div class="card-header"><i class="fa fa-user"></i> Tambah Data User</div>
	<div class="card-body">
		<form action="<?= base_url(); ?>core/Route.php?route=adm_insert_user" method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
		          <div class="form-group">
		            <label for="nik">NIK</label>
		            <input class="form-control" id="nik" name="nik" type="number" placeholder="Masukan NIK" required="true">
		          </div>

		          <div class="form-group">
		            <label for="nama">Nama User</label>
		            <input class="form-control" id="nama" name="nama" type="text" placeholder="Masukan Nama" required="true">
		          </div>

		          <div class="form-group">
		            <label for="email">Email</label>
		            <input class="form-control" id="email" name="email" type="email" placeholder="Masukan Email" required="true">
		          </div>

		          <div class="form-group">
		            <label for="tmpt">Tempat Lahir</label>
		            <input class="form-control" id="tmpt" name="tmpt" type="text" placeholder="Masukan Tempat Lahir" required="true">
		          </div>
		      	</div>
		      	<div class="col-md-6">
		      	  <div class="form-group">
		            <label for="user">Username</label>
		            <input class="form-control" id="user" name="user" type="text" placeholder="Masukan Username" required="true">
		          </div>

		          <div class="form-group">
		            <label for="pass">Password</label>
		            <input class="form-control" id="pass" name="pass" type="password" placeholder="Masukan Password" required="true">
		          </div>

		          <div class="form-group">
		            <label for="lvl">Level</label>
		            <select class="form-control" name="lvl">
		            	<option>-- Pilih Level --</option>
		            	<option value="1">Admin</option>
		            	<option value="2">Manager</option>
		            	<option value="3">Karyawan</option>
		            </select>
		          </div>
		          
		          <div class="form-group">
		            <label for="gbr">Gambar</label>
		            <input class="form-control" id="gbr" name="gbr" type="file" required="true">
		          </div>
		      	</div>
		      	<div class="col-md-6">
	          		<button type="submit" class="btn btn-outline-primary btn-md"><i class="fa fa-plus"></i> Tambah Data</button>
	          	</div>
          	</div>
        </form>    
	</div>
	<div class="card-footer small text-muted">Tambah Data User</div>
</div>