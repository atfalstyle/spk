<?php 
	
	$Model_all = new Model_all($dbs);

	$staff = $Model_all->query("SELECT * FROM dt_karyawan WHERE jabatan = 3 AND jns_jbt = 1");
	$koordinator = $Model_all->query("SELECT * FROM dt_karyawan WHERE jabatan = 3 AND jns_jbt = 2");
	$supervisor = $Model_all->query("SELECT * FROM dt_karyawan WHERE jabatan = 3 AND jns_jbt = 3");
	$asm = $Model_all->query("SELECT * FROM dt_karyawan WHERE jabatan = 3 AND jns_jbt = 4");
	$manager = $Model_all->query("SELECT * FROM dt_karyawan WHERE jabatan = 2");
	$st = $Model_all->get("dt_nilai_st");
	$sv = $Model_all->get("dt_nilai_sv");
	$krd = $Model_all->get("dt_nilai_krd");
	$asmm = $Model_all->get("dt_nilai_asm");

	$total = $st->rowCount()+$sv->rowCount()+$krd->rowCount()+$asmm->rowCount();
?>
<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="#">Home</a></li>
	<li class="breadcrumb-item active">Beranda</li>
</ol>

<div class="alert alert-primary">Hai <?= $show->nama; ?> Kamu Login Sebagai Admin , Semoga Harimu Menyenangkan</div>
<div class="row">
	<div class="col-xl-3 col-sm-6 mb-3">
	  	<div class="card text-white bg-primary o-hidden h-100">
		    <div class="card-body">
		      <div class="card-body-icon">
		        <i class="fa fa-fw fa-user"></i>
		      </div>
		      <div class="mr-5"><?= $staff->rowCount(); ?> Data Staff</div>
		    </div>
		    <a class="card-footer text-white clearfix small z-1" href="?kontent=karyawan">
		      <span class="float-left">View Details</span>
		      <span class="float-right">
		        <i class="fa fa-angle-right"></i>
		      </span>
		    </a>
	  	</div>
	</div>
	<div class="col-xl-3 col-sm-6 mb-3">
	  	<div class="card text-white bg-warning o-hidden h-100">
		    <div class="card-body">
		      <div class="card-body-icon">
		        <i class="fa fa-fw fa-user"></i>
		      </div>
		      <div class="mr-5"><?= $koordinator->rowCount(); ?> Data Koordinator</div>
		    </div>
		    <a class="card-footer text-white clearfix small z-1" href="?kontent=karyawan">
		      <span class="float-left">View Details</span>
		      <span class="float-right">
		        <i class="fa fa-angle-right"></i>
		      </span>
		    </a>
	  	</div>
	</div>
	<div class="col-xl-3 col-sm-6 mb-3">
	  	<div class="card text-white bg-success o-hidden h-100">
		    <div class="card-body">
		      <div class="card-body-icon">
		        <i class="fa fa-fw fa-user"></i>
		      </div>
		      <div class="mr-5"><?= $supervisor->rowCount(); ?> Data Supervisor</div>
		    </div>
		    <a class="card-footer text-white clearfix small z-1" href="?kontent=karyawan">
		      <span class="float-left">View Details</span>
		      <span class="float-right">
		        <i class="fa fa-angle-right"></i>
		      </span>
		    </a>
	  	</div>
	</div>

	<div class="col-xl-3 col-sm-6 mb-3">
	  	<div class="card text-white bg-danger o-hidden h-100">
		    <div class="card-body">
		      <div class="card-body-icon">
		        <i class="fa fa-fw fa-user"></i>
		      </div>
		      <div class="mr-5"><?= $asm->rowCount(); ?> Data Assistant Manager</div>
		    </div>
		    <a class="card-footer text-white clearfix small z-1" href="?kontent=karyawan">
		      <span class="float-left">View Details</span>
		      <span class="float-right">
		        <i class="fa fa-angle-right"></i>
		      </span>
		    </a>
	  	</div>
	</div>

	<div class="col-xl-3 col-sm-6 mb-3">
	  	<div class="card text-white bg-info o-hidden h-100">
		    <div class="card-body">
		      <div class="card-body-icon">
		        <i class="fa fa-fw fa-user"></i>
		      </div>
		      <div class="mr-5"><?= $manager->rowCount(); ?> Data Manager</div>
		    </div>
		    <a class="card-footer text-white clearfix small z-1" href="#">
		      <span class="float-left">View Details</span>
		      <span class="float-right">
		        <i class="fa fa-angle-right"></i>
		      </span>
		    </a>
	  	</div>
	</div>

	<div class="col-xl-3 col-sm-6 mb-3">
	  	<div class="card text-white bg-secondary o-hidden h-100">
		    <div class="card-body">
		      <div class="card-body-icon">
		        <i class="fa fa-fw fa-book"></i>
		      </div>
		      <div class="mr-5"><?= $total; ?> Data Penilaian</div>
		    </div>
		    <a class="card-footer text-white clearfix small z-1" href="#">
		      <span class="float-left">View Details</span>
		      <span class="float-right">
		        <i class="fa fa-angle-right"></i>
		      </span>
		    </a>
	  	</div>
	</div>
</div>