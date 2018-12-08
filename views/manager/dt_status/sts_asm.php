<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="#">Data Karyawan</a></li>
	<li class="breadcrumb-item active">Lihat Data Karyawan</li>
</ol>

<?php
  if(@$_SESSION['flashdata']):
    echo "<p class='alert alert-info'>".$_SESSION['flashdata']."</p>";
    unset($_SESSION['flashdata']);
  endif;
?>
<div class="card mb-3">
	<div class="card-header"><i class="fa fa-user"></i> Data Karyawan</div>
	<div class="card-body">
	  	<div class="table-responsive">
		    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		      <thead class="thead-dark">
		        <tr>
		          <th width="7%">No</th>
		          <th width="10%">Gambar</th>
		          <th>Nama</th>
		          <th>Jabatan</th>
		          <th>Hasil Poin Penilaian</th>
		          <th>Kenaikan Jabatan</th>
		          <th>Aksi</th>
		        </tr>
		      </thead>
		      <tbody>
		        <tr>
		          <td></td>
		          <td align="center"><img width="50" src="../../assets/img/karyawan/"></td>
		          <td></td>
		          <td></td>
		          <td></td>
		          <td></td>
		          <td>
		          	<a href="" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="left" title="Konfirmasi Nilai"><i class="fa fa-refresh"></i> Konfirmasi Nilai</a>
		          	<!-- <button type="button" class="btn btn-default btn-sm"><i class="fa fa-close"></i> Data Penilaian Tidak Ada</button> -->
		          	<!-- <button type="button" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Status Jabatan Sudah Di Konfirmasi</button -->
		          </td>
		        </tr>
		      </tbody>
		    </table>
	  	</div>
	</div>
	<div class="card-footer small text-muted">Data Karyawan</div>
</div>
