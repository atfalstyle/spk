<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="#">Data Penilaian Supervisor</a></li>
	<li class="breadcrumb-item active">Edit Data Penilaian Supervisor</li>
</ol>

<div class="card mb-3">
	<div class="card-header"><i class="fa fa-user"></i> Edit Data Penilaian Supervisor</div>
	<div class="card-body">
		<form action="../../controller/c_penilaian.php?page=nilai_edit_m_sv" method="POST">
			<div class="row">
				<div class="col-md-6">
          <div class="form-group">
            <label for="nm_k">Pilih Karyawan</label>
            <input type="hidden" name="id" value="">
            <select class="form-control" name="nm_k" required="true">
            	<option>-- Pilih Karyawan</option>
            </select>
          </div>

          <div class="form-group">
            <label for="c1">Masukan Pencapaian Karyawan ( C1 )</label>
            <select class="form-control" name="c1" required="true">
            	<option>-- Pilih Kriteria</option>
            </select>
          </div>

          <div class="form-group">
            <label for="c1">Masukan Displin Karyawan ( C2 )</label>
            <select class="form-control" name="c2" required="true">
            	<option>-- Pilih Kriteria</option>
            </select>
          </div>

          <div class="form-group">
            <label for="c1">Masukan Attitude Karyawan ( C3 )</label>
            <select class="form-control" name="c3" required="true">
            	<option>-- Pilih Kriteria</option>
            </select>
          </div>

          <div class="form-group">
            <label for="c1">Masukan kompetensi Karyawan ( C4 )</label>
            <select class="form-control" name="c4" required="true">
            	<option>-- Pilih Kriteria</option>
            </select>
          </div>

          <div class="form-group">
          	<button type="submit" class="btn btn-outline-success btn-md"><i class="fa fa-edit"></i> Edit Data</button>
          </div>
      	</div>
      	</div>
    </form>
	</div>
	<div class="card-footer small text-muted">Tambah Data Penilaian</div>
</div>
