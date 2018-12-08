<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="#">Data Penilaian</a></li>
	<li class="breadcrumb-item active">Lihat Data Penilaian</li>
</ol>
<?php
  if(@$_SESSION['flashdata']):
    echo "<p class='alert alert-info'>".$_SESSION['flashdata']."</p>";
    unset($_SESSION['flashdata']);
  endif;
?>
<div class="card mb-3">
	<div class="card-header"><i class="fa fa-user"></i> Data Penilaian Staff</div>
	<div class="card-body">
		<div class="col-md-12">
			<a href="?kontent=penilaian_st&aksi=tmb" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Tambah Data"><i class="fa fa-plus"></i> Tambah Data</a>
			<hr>
		</div>
	  	<div class="table-responsive">
		    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		      <thead class="thead-dark">
		        <tr>
		          <th>No</th>
		          <th>Nama Karyawan</th>
		          <th>C1</th>
		          <th>C2</th>
		          <th>C3</th>
		          <th>C4</th>
		          <th>Aksi</th>
		        </tr>
		      </thead>
		      <tbody>
		        <tr>
		        	<td></td>
		        	<td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
			        <td>
			        	<a href="" class="btn btn-outline-success btn-sm" data-toggle="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-edit"></i></a>
			          	<a onclick="return confirm('Yakin Ingin Hapus Data..??')" href="" class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Hapus Data"><i class="fa fa-trash-o"></i></a>
			        </td>
		        </tr>
		      </tbody>
		    </table>
	  	</div>
	</div>
	<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

<div class="card mb-3">
	<div class="card-header"><i class="fa fa-user"></i> Rating Kecocokan</div>
	<div class="card-body">
	  	<div class="table-responsive">
		    <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
		      <thead class="thead-dark">
		        <tr class="btn-warning">
		          <th>Alternatif</th>
		          <th>C1</th>
		          <th>C2</th>
		          <th>C3</th>
		          <th>C4</th>
		        </tr>
		      </thead>
		      <tbody>
		      	<tr>
		        	<td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
		        </tr>
		      </tbody>
		      <tfoot>
              <tr>
                <td><b>Jumlah</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
          </tfoot>
		    </table>
	  	</div>
	</div>
	<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

<div class="card mb-3">
	<div class="card-header"><i class="fa fa-user"></i> Hasil Normalisasi</div>
	<div class="card-body">
	  	<div class="table-responsive">
		    <table class="table table-bordered" id="dataTable3" width="100%" cellspacing="0">
		      <thead class="thead-dark">
		        <tr class="btn-warning">
		          <th>Alternatif</th>
		          <th>C1</th>
		          <th>C2</th>
		          <th>C3</th>
		          <th>C4</th>
		        </tr>
		      </thead>
		      <tbody>
            <tr>
            	<td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
		      </tbody>
		    </table>
	  	</div>
	</div>
	<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

<div class="card mb-3">
	<div class="card-header"><i class="fa fa-user"></i> Perangkingan</div>
	<div class="card-body">
	  	<div class="table-responsive">
		    <table class="table table-bordered" id="dataTable4" width="100%" cellspacing="0">
		      <thead class="thead-dark">
		        <tr class="btn-warning">
		          <th>Kode</th>
              <th>Alternatif</th>
              <th>Jumlah Poin</th>
              <th>Nilai</th>
		        </tr>
		      </thead>
		      <tbody>
            <tr>
              <td>V</td>
              <td></td>
              <td></td>
              <td></td>
          	</tr>
		      </tbody>
		    </table>
	  	</div>
	</div>
	<div class="card-footer small text-muted"></div>
</div>
