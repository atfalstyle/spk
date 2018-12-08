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
			            <input class="form-control" readonly="true" id="nama" required="true" name="nama" type="text" placeholder="Masukan Nama Lengkap" value="<?= $tampil->nama; ?>">
			          </div>
			          <div class="form-group">
			            <label for="jns_jbt">Jenis Jabatan</label>
			            <input type="hidden" name="id" value="">
			            <select class="form-control" name="jns_jbt">
			            	<option>-- Pilih Jenis Jabatan --</option>
			            	<option value="1" >Staff</option>
			            	<option value="2" > Koordinator</option>
			            	<option value="3" > Supervsisor</option>
			            	<option value="4" >Assistant Manager</option>
			            </select>
			          </div>

			          <button type="submit" class="btn btn-outline-success btn-md"><i class="fa fa-edit"></i> Edit Data</button>
			      	</div>
	          	</div>
        	</form>
		</div>
	<div class="card-footer small text-muted">Edit Data Jenis Jabatan</div>
</div>
