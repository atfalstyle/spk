<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="#">Data Kriteria</a></li>
	<li class="breadcrumb-item active">Tambah Data Kriteria 3</li>
</ol>

<div class="card mb-3">
	<div class="card-header"><i class="fa fa-user"></i> Tambah Data Kriteria 3</div>
	<div class="card-body">
		<form action="<?= base_url(); ?>core/Route.php?route=insert_adm_crit_3" method="POST">
			<div class="row">
				<div class="col-md-6">
		          <div class="form-group">
		            <label for="nm">Nama Kriteria</label>
		            <input class="form-control" id="nm" name="nm" type="text" placeholder="Masukan Nama Kriteria">
		          </div>

		          <div class="form-group">
		            <label for="bbt">Bobot Kriteria</label>
		            <input class="form-control" id="bbt" name="bbt" type="number" placeholder="Masukan Bobot Kriteria">
		          </div>

		          <div class="form-group">
		          	<button class="btn btn-outline-primary btn-md"><i class="fa fa-plus"></i> Tambah Data</button>
		          </div>
		      	</div>
          	</div>
        </form>   
	</div>
	<div class="card-footer small text-muted">Tambah Data Kriteria 3</div>
</div>