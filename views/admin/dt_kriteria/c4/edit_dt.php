<?php 
	@$id = $_GET['id'];
	$Model_all = new Model_all($dbs);
	$show = $Model_all->show('c_kompetensi', 'id_c4', $id);
	$d = $show->fetch(PDO::FETCH_LAZY);
?>
<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="#">Data Kriteria</a></li>
	<li class="breadcrumb-item active">Edit Data Kriteria 4</li>
</ol>

<div class="card mb-3">
	<div class="card-header"><i class="fa fa-user"></i> Edit Data Kriteria 4</div>
	<div class="card-body">
		<form action="<?= base_url(); ?>core/Route.php?route=update_adm_crit_4" method="POST">
			<div class="row">
				<div class="col-md-6">
		          <div class="form-group">
		            <label for="nm">Nama Kriteria</label>
		            <input name="id" type="hidden" value="<?= $d->id_c4; ?>">
		            <input class="form-control" id="nm" name="nm" type="text" placeholder="Masukan Nama Kriteria" value="<?= $d->nama_c4; ?>">
		          </div>

		          <div class="form-group">
		            <label for="bbt">Bobot Kriteria</label>
		            <input class="form-control" id="bbt" name="bbt" type="number" placeholder="Masukan Bobot Kriteria" value="<?= $d->bobot_c4; ?>">
		          </div>

		          <div class="form-group">
		          	<button type="submit" class="btn btn-outline-success btn-md"><i class="fa fa-edit"></i> Edit Data</button>
		          </div>
		      	</div>
          	</div>
        </form>
	</div>
	<div class="card-footer small text-muted">Edit Data Kriteria 4</div>
</div>
