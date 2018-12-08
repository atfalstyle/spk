<?php
session_start();
if(@$_SESSION['user']):

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
  <title>SPK Penaikan Karyawan</title>

  <!-- Link CSS -->
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="../../assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="../../assets/css/sb-admin.css" rel="stylesheet">
  <!-- Akhir Link CSS -->

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
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

      		if($konten == ''):
      			include "content_awal.php";

      		elseif($konten == 'beranda'):
      			include "content_awal.php";

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
            else:
              include "dt_penilaian_asm/view_dt.php";
            endif;

          // Karyawan Konten
          elseif($konten == 'karyawan'):
            if($aksi == 'det'):
              include "dt_karyawan/det_dt.php";
            else:
              include "dt_karyawan/view_dt.php";
            endif;

          // Kriteria Konten
          elseif($konten == 'kriteria'):
              include "dt_kriteria/view_dt.php";

          // Akun Konten
          elseif($konten == 'akun'):
              include "akun.php";

          //Profile Kontent
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
  </div>
</body>

</html>
<?php
else:
  header('location: ../login.php');
endif;
?>
