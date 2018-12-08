<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="#">Data User</a></li>
	<li class="breadcrumb-item active">Edit Data User</li>
</ol>

<div class="card mb-3">
	<div class="card-header"><i class="fa fa-user"></i> Edit Data User</div>
	<div class="card-body">
		<form action="" method="POST">
			<div class="row">
		      	<div class="col-md-6">
		      	  <div class="form-group">
		            <label for="user">Username</label>
		            <input type="hidden" name="id" value="">
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

		          <button type="submit" class="btn btn-outline-success btn-md"><i class="fa fa-edit"></i> Edit Data</button>
		      	</div>
          	</div>
        </form>
	</div>
	<div class="card-footer small text-muted">Edit Data User</div>
</div>
