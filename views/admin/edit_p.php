<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="#">Data Pribadi</a></li>
	<li class="breadcrumb-item active">Edit Data Pribadi</li>
</ol>

<div class="card mb-3">
	<div class="card-header"><i class="fa fa-user"></i> Edit Data Pribadi</div>
	<div class="card-body">
		<form action="../../controller/c_user.php?page=profile_edit" method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
		          <div class="form-group">
		            <label for="nik">NIK</label>
		            <input type="hidden" name="id" value="">
		            <input class="form-control" id="nik" name="nik" type="number" placeholder="Masukan Nama" required="true" value="">
		          </div>

		          <div class="form-group">
		            <label for="nama">Nama User</label>
		            <input class="form-control" id="nama" name="nama" type="text" placeholder="Masukan Nama" required="true" value="">
		          </div>

		          <div class="form-group">
		            <label for="email">Email</label>
		            <input class="form-control" id="email" name="email" type="email" placeholder="Masukan Email" required="true" value="">
		          </div>

		          <div class="form-group">
		            <label for="tmpt">Tempat Lahir</label>
		            <input class="form-control" id="tmpt" name="tmpt" type="text" placeholder="Masukan Tempat Lahir" required="true" value="">
		          </div>
		      	</div>
		      	<div class="col-md-6">
		      	  <div class="form-group">
		            <label for="user">Username</label>
		            <input class="form-control" id="user" name="user" type="text" placeholder="Masukan Username" required="true" value="">
		          </div>

		          <div class="form-group">
		            <label for="pass">Password</label>
		            <input class="form-control" id="pass" name="pass" type="text" placeholder="Masukan Password" required="true" value="">
		          </div>

		          <div class="form-group">
		            <label for="lvl">Level</label>
		            <select class="form-control" name="lvl">
		            	<option>-- Pilih Level --</option>
		            	<option value="1" >Admin</option>
		            	<option value="2" >Manager</option>
		            	<option value="3" >Karyawan</option>
		            </select>
		          </div>

		          <div class="form-group">
		          	<br>
		            <img src="../../assets/img/karyawan/" width="142">
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
