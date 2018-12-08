<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top" id="mainNav">
	<a class="navbar-brand text-white" href="#" id="jdl">SPK Penaikan Jabatan</a>
	<div style="margin-left: 1020px;" class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li><img width="40" src="../../assets/img/karyawan/"  class="pull-right img-thumbnail"></li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Dalban
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="?kontent=akun&id=">Akun</a>
	          <a class="dropdown-item" href="?kontent=profile">Profile</a>
	          <a class="dropdown-item" href="../../controller/c_login.php?page=logout">Logout</a>
	        </div>
	      </li>
	    </ul>
	</div>
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	  <span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
	  <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
	    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
	      <a class="nav-link" href="?kontent=beranda">
	        <i class="fa fa-fw fa-home"></i>
	        <span class="nav-link-text">Beranda</span>
	      </a>
	    </li>
	    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
	      <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
	        <i class="fa fa-fw fa-sitemap"></i>
	        <span class="nav-link-text">Data Master</span>
	      </a>
	      <ul class="sidenav-second-level collapse" id="collapseMulti">
	        <li><a href="?kontent=karyawan">Data Karyawan</a></li>
	        <li><a href="?kontent=kriteria">Data Kriteria</a></li>
	      </ul>
	    </li>
	    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
	      <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#drop" data-parent="#exampleAccordion">
	        <i class="fa fa-fw fa-user"></i>
	        <span class="nav-link-text">Penilaian Karyawan</span>
	      </a>
	      <ul class="sidenav-second-level collapse" id="drop">
	        <li><a href="?kontent=penilaian_st">Staff</a></li>
	        <li><a href="?kontent=penilaian_krd">koordinator</a></li>
	        <li><a href="?kontent=penilaian_sv">Supervisor</a></li>
	        <li><a href="?kontent=penilaian_asm">Assistant Manager</a></li>
	      </ul>
	    </li>

	    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
	      <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#sts" data-parent="#exampleAccordion">
	        <i class="fa fa-fw fa-book"></i>
	        <span class="nav-link-text">Status Jabatan Karyawan</span>
	      </a>
	      <ul class="sidenav-second-level collapse" id="sts">
	        <li><a href="?kontent=sts_st">Staff</a></li>
	        <li><a href="?kontent=sts_krd">koordinator</a></li>
	        <li><a href="?kontent=sts_sv">Supervisor</a></li>
	        <li><a href="?kontent=sts_asm">Assistant Manager</a></li>
	      </ul>
	    </li>
	  </ul>
	  <ul class="navbar-nav sidenav-toggler">
	    <li class="nav-item">
	      <a class="nav-link text-center" id="sidenavToggler">
	        <i class="fa fa-fw fa-angle-left"></i>
	      </a>
	    </li>
	  </ul>
	</div>
</nav>
