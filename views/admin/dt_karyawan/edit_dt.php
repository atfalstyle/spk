<?php  
	$id = $_GET['id'];
	$Model_all = new Model_all($dbs);
	$views = $Model_all->show('dt_karyawan','id_user',$id);
	$data = $views->fetch(PDO::FETCH_LAZY);
?>
<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="#">Data Karyawan</a></li>
	<li class="breadcrumb-item active">Edit Data Karyawan</li>
</ol>

<div class="card mb-3">
	<div class="card-header"><i class="fa fa-user"></i> Edit Data Karyawan</div>
	<div class="card-body">
		<form action="<?= base_url(); ?>core/Route.php?route=adm_edit_karyawan" method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
		          <div class="form-group">
		            <label for="nik">NIK</label>
		            <input type="hidden" name="id" value="<?= $data->id_user; ?>">
		            <input class="form-control" id="nik" name="nik" type="number" placeholder="Masukan NIK" value="<?= $data->nik; ?>">
		          </div>

		          <div class="form-group">
		            <label for="nama">Nama</label>
		            <input class="form-control" id="nama" name="nama" type="text" placeholder="Masukan Nama Lengkap" value="<?= $data->nama; ?>">
		          </div>

		          <div class="form-group">
		            <label for="lvl">Jabatan</label>
		            <select class="form-control" name="lvl">
		            	<option>-- Pilih Jabatan --</option>
		            	<option value="1" <?php if($data->jabatan == '1'){ echo "selected";} ?>>Admin</option>
		            	<option value="2" <?php if($data->jabatan == '2'){ echo "selected";} ?>>Manager</option>
		            	<option value="3" <?php if($data->jabatan == '3'){ echo "selected";} ?>>Karyawan</option>
		            </select>
		          </div>

		          <div class="form-group">
		            <label for="jbtn">Jenis Kelamin</label>
		            <select class="form-control" name="jk">
		            	<option value="">-- Pilih Jenis Kelamin --</option>
		            	<option value="Laki - Laki" <?php if($data->jk == 'Laki - Laki'){ echo "selected";} ?>>Laki - Laki</option>
		            	<option value="Perempuan" <?php if($data->jk == 'Perempuan'){ echo "selected";} ?>>Perempuan</option>
		            </select>
		          </div>

		          <div class="form-group">
		            <label for="tlhr">Tempat Lahir</label>
		            <input class="form-control" id="tlhr" name="tl" type="text" placeholder="Masukan Tempat Lahir" value="<?= $data->tempat_lahir; ?>">
		          </div>

		          <div class="form-group">
		            <label for="tgl">Tanggal Lahir</label>
		            <input class="form-control" id="tgl" name="tgl" type="date" placeholder="Masukan Jabatan" value="<?= $data->tgl_lhr; ?>">
		          </div>

		          <div class="form-group">
		            <label for="almt_asl">Alamat Asal</label>
		            <input class="form-control" id="almt_asl" name="almt_asl" type="text" placeholder="Masukan Alamat Asal" value="<?= $data->almt_asal; ?>">
		          </div>

		          <div class="form-group">
		            <label for="almt_sk">Alamat Sekarang</label>
		            <input class="form-control" id="almt_sk" name="almt_sk" type="text" placeholder="Masukan Alamat Sekarang" value="<?= $data->almt_skrng; ?>">
		          </div>
		      	</div>

		      	<!-- Picture -->
		      	<div class="col-md-6">
		      	  <div class="form-group">
		            <label for="no_hp">No Hp</label>
		            <input class="form-control" id="no_hp" name="no_hp" type="number" placeholder="Masukan Nomor Handphone" value="<?= $data->no_hp; ?>">
		          </div>

		          <div class="form-group">
		            <label for="email">Email</label>
		            <input class="form-control" id="email" name="email" type="email" placeholder="Masukan Email" value="<?= $data->email; ?>">
		          </div>

		          <div class="form-group">
		            <label for="sts">Status Nikah</label>
		            <select class="form-control" name="sts" id="sts">
		            	<option value="">-- Pilih Status Nikah --</option>
		            	<option value="Belum" <?php if($data->status_nikah == 'Belum'){ echo "selected";} ?>>Belum</option>
		            	<option value="Sudah" <?php if($data->status_nikah == 'Sudah'){ echo "selected";} ?>>Sudah</option>
		            </select>
		          </div>

		          <div class="form-group">
		            <label for="pndkn">Pendidikan</label>
		            <select class="form-control" name="pndkn" id="pndkn">
		            	<option value="">-- Pilih Pendidikan --</option>
		            	<option value="SMA / SMK" <?php if($data->pendidikan == 'SMA / SMK'){ echo "selected";} ?>>SMA / SMK</option>
		            	<option value="Diploma" <?php if($data->pendidikan == 'Diploma'){ echo "selected";} ?>>Diploma</option>
		            	<option value="Sarjana" <?php if($data->pendidikan == 'Sarjana'){ echo "selected";} ?>>Sarjana</option>
		            	<option value="Magister" <?php if($data->pendidikan == 'Magister'){ echo "selected";} ?>>Magister</option>
		            	<option value="Proffesor" <?php if($data->pendidikan == 'Proffesor'){ echo "selected";} ?>>Proffesor</option>
		            </select>
		          </div>

		          <div class="form-group">
		            <label for="jrsn">Jurusan</label>
		            <input class="form-control" id="jrsn" name="jrsn" type="text" placeholder="Masukan Jurusan" value="<?= $data->jrsn; ?>">
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
	<div class="card-footer small text-muted">Edit Data Karyawan</div>
</div>
