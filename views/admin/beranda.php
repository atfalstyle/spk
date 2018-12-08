<?php
session_start();
require_once('../../core/Helper.php');
require_once('../../core/Database.php');
require_once('../../models/Model_all.php');

$Model_all = new Model_all($dbs);
$d = $Model_all->show('dt_user', 'id_user', $_SESSION['admin']);
$show = $d->fetch(PDO::FETCH_LAZY);
if(@$_SESSION['admin']):

ob_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SPK Penaikan Jabatan</title>

  <!-- Link CSS -->
  <link href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/css/sb-admin.css" rel="stylesheet">
  <!-- Akhir Link CSS -->

</head>

<body class="fixed-nav sticky-footer bg-light" id="page-top">
  <!-- Navigation Menu Sidebar -->
  	<?php
  		include "menu.php";
  	?>
  <!-- Akhir Navigasi -->

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Konten awal -->
      	<?php
      		@$konten = $_GET['kontent'];
      		@$aksi 	 = $_GET['aksi'];

          // Konten Awal
      		if($konten == ''):
      			include "content_awal.php";

          // Konten Awal
      		elseif($konten == 'beranda'):
      			include "content_awal.php";

          elseif($konten == 'sts_st'):
            include "dt_status/sts_st.php";
          elseif($konten == 'sts_krd'):
            include "dt_status/sts_krd.php";
          elseif($konten == 'sts_sv'):
            include "dt_status/sts_sv.php";
          elseif($konten == 'sts_asm'):
            include "dt_status/sts_asm.php";

          // Penilaian Konten

      		// Penilaian Staff Konten
          elseif($konten == 'penilaian_st'):
            if($aksi == 'tmb'):
              include "dt_penilaian_st/tmb_dt.php";
            elseif($aksi == 'edit'):
              include "dt_penilaian_st/edit_dt.php";
            else:
              include "dt_penilaian_st/view_dt.php";
            endif;

          elseif($konten == 'penilaian_krd'):
            if($aksi == 'tmb'):
              include "dt_penilaian_krd/tmb_dt.php";
            elseif($aksi == 'edit'):
              include "dt_penilaian_krd/edit_dt.php";
            else:
              include "dt_penilaian_krd/view_dt.php";
            endif;

          elseif($konten == 'penilaian_sv'):
            if($aksi == 'tmb'):
              include "dt_penilaian_sv/tmb_dt.php";
            elseif($aksi == 'edit'):
              include "dt_penilaian_sv/edit_dt.php";
            else:
              include "dt_penilaian_sv/view_dt.php";
            endif;

          elseif($konten == 'penilaian_asm'):
            if($aksi == 'tmb'):
              include "dt_penilaian_asm/tmb_dt.php";
            elseif($aksi == 'edit'):
              include "dt_penilaian_asm/edit_dt.php";
            elseif($aksi == 'sts'):
              include "dt_penilaian_asm/status_jbt.php";
            else:
              include "dt_penilaian_asm/view_dt.php";
            endif;

          // Karyawan Konten
      		elseif($konten == 'karyawan'):
            if($aksi == 'tmb'):
              include "dt_karyawan/tmb_dt.php";
            elseif($aksi == 'edit'):
              include "dt_karyawan/edit_dt.php";
            elseif($aksi == 'det'):
              include "dt_karyawan/det_dt.php";
            else:
              include "dt_karyawan/view_dt.php";
            endif;

          // Kriteria Konten
      		elseif($konten == 'kriteria'):
            // C1
            if($aksi == 'tmb_c1'):
              include "dt_kriteria/c1/tmb_dt.php";
            elseif($aksi == 'edit_c1'):
              include "dt_kriteria/c1/edit_dt.php";

            // C2
            elseif($aksi == 'tmb_c2'):
              include "dt_kriteria/c2/tmb_dt.php";
            elseif($aksi == 'edit_c2'):
              include "dt_kriteria/c2/edit_dt.php";

            // C3
            elseif($aksi == 'tmb_c3'):
              include "dt_kriteria/c3/tmb_dt.php";
            elseif($aksi == 'edit_c3'):
              include "dt_kriteria/c3/edit_dt.php";

            // C4
            elseif($aksi == 'tmb_c4'):
              include "dt_kriteria/c4/tmb_dt.php";
            elseif($aksi == 'edit_c4'):
              include "dt_kriteria/c4/edit_dt.php";

            else:
              include "dt_kriteria/view_dt.php";
            endif;

          // User Konten
      		elseif($konten == 'user'):
            if($aksi == 'tmb'):
              include "dt_user/tmb_dt.php";
            elseif($aksi == 'edit'):
              include "dt_user/edit_dt.php";
            elseif($aksi == 'det'):
              include "dt_user/det_dt.php";
            else:
              include "dt_user/view_dt.php";
            endif;

          // Profile
          elseif($konten == 'profile'):
            if($aksi == 'edit'):
              include "edit_p.php";
            else:
              include "profile.php";
            endif;
      		endif;
      	?>
      <!-- Akhir Konten Awal -->
    </div>

    <!-- Footer -->
    	<?php
    		include "footer.php";
    	?>
    <!-- Akhir Footer -->
  </div>
</body>

</html>
<?php
else:
  echo "<script>window.location='../login.php';</script>";
endif;
?>
