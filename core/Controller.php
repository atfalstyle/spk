<?php
require_once('Database.php');
require_once('Model.php');
require_once('Helper.php');
// Meng Include Kan File Controllers
require_once('../controllers/LoginsControllers.php');
require_once('../controllers/KriteriasControllers.php');
require_once('../controllers/UsersControllers.php');
require_once('../controllers/KaryawansControllers.php');

// Mendaftarkan Variabel Controllers
$login    = new LoginsControllers($Model_login);
$kriteria = new KriteriasControllers($Model_all);
$user     = new UsersControllers($Model_all);
$karyawan = new KaryawansControllers($Model_all);
