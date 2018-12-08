<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="#">Data Karyawan</a></li>
	<li class="breadcrumb-item active">Edit Data Karyawan</li>
</ol>

<div class="card mb-3">
	<div class="card-header"><i class="fa fa-user"></i> Edit Data Karyawan</div>
	<div class="card-body">
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
		          <div class="form-group">
		            <label for="nik">NIK</label>
		            <input type="hidden" name="id" value="">
		            <input class="form-control" id="nik" name="nik" type="number" placeholder="Masukan NIK" value="">
		          </div>

		          <div class="form-group">
		            <label for="nama">Nama</label>
		            <input class="form-control" id="nama" name="nama" type="text" placeholder="Masukan Nama Lengkap" value="">
		          </div>

		          <div class="form-group">
		            <input type="hidden" name="lvl" value="">
		          </div>

		          <div class="form-group">
		            <label for="jbtn">Jenis Kelamin</label>
		            <select class="form-control" name="jk">
		            	<option value="">-- Pilih Jenis Kelamin --</option>
		            	<option value="Laki - Laki" >Laki - Laki</option>
		            	<option value="Perempuan" >Perempuan</option>
		            </select>
		          </div>

		          <div class="form-group">
		            <label for="tlhr">Tempat Lahir</label>
		            <input class="form-control" id="tlhr" name="tl" type="text" placeholder="Masukan Tempat Lahir" value="">
		          </div>

		          <div class="form-group">
		            <label for="tgl">Tanggal Lahir</label>
		            <input class="form-control" id="tgl" name="tgl" type="date" placeholder="Masukan Jabatan" value="">
		          </div>

		          <div class="form-group">
		            <label for="almt_asl">Alamat Asal</label>
		            <input class="form-control" id="almt_asl" name="almt_asl" type="text" placeholder="Masukan Alamat Asal" value="">
		          </div>

		          <div class="form-group">
		            <label for="almt_sk">Alamat Sekarang</label>
		            <input class="form-control" id="almt_sk" name="almt_sk" type="text" placeholder="Masukan Alamat Sekarang" value="">
		          </div>
		      	</div>

		      	<!-- Picture -->
		      	<div class="col-md-6">
		      	  <div class="form-group">
		            <label for="no_hp">No Hp</label>
		            <input class="form-control" id="no_hp" name="no_hp" type="number" placeholder="Masukan Nomor Handphone" value="">
		          </div>

		          <div class="form-group">
		            <label for="email">Email</label>
		            <input class="form-control" id="email" name="email" type="email" placeholder="Masukan Email" value="">
		          </div>

		          <div class="form-group">
		            <label for="sts">Status Nikah</label>
		            <select class="form-control" name="sts" id="sts">
		            	<option value="">-- Pilih Status Nikah --</option>
		            	<option value="Belum" >Belum</option>
		            	<option value="Sudah" >Sudah</option>
		            </select>
		          </div>

		          <div class="form-group">
		            <label for="pndkn">Pendidikan</label>
		            <select class="form-control" name="pndkn" id="pndkn">
		            	<option value="">-- Pilih Pendidikan --</option>
		            	<option value="SMA / SMK" >SMA / SMK</option>
		            	<option value="Diploma" >Diploma</option>
		            	<option value="Sarjana" >Sarjana</option>
		            	<option value="Magister" >Magister</option>
		            	<option value="Proffesor" >Proffesor</option>
		            </select>
		          </div>

		          <div class="form-group">
		            <label for="jrsn">Jurusan</label>
		            <input class="form-control" id="jrsn" name="jrsn" type="text" placeholder="Masukan Jurusan" value="">
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
	<div class="card-footer small text-muted">Edit Data Karyawan</div>
</div>
