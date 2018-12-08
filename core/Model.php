<?php
// Meng Include Kan File Models
require_once('../models/Model_all.php');
require_once('../models/Model_login.php');

// Mendaftarkan Variabel Model
$Model_all    = new Model_all($dbs);
$Model_login  = new Model_login($dbs);
