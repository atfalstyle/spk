<?php
/* 
| ------------------------|
| Include Controller File |
| ------------------------|
*/
require_once('Controller.php');
/*
| -----------------------|
| Make Methode Route Get |
| -----------------------|
*/
@$route = $_GET['route'];
/*
| --------------------------|
| Register Route On Process |
| --------------------------|
| Login & Logout            |
| --------------------------| 
*/
if ($route == 'login') :
  	$login->toLogin();
elseif ($route == 'logout') :
  	$login->logOut();
/*
| --------------------------|
| ADMIN PANEL               |
| --------------------------|
| Criteria Admin            |
| --------------------------|
| Criteria 1  |
| ------------|
*/
elseif ($route == 'insert_adm_crit_1') :
  	$kriteria->insert_adm_c1();
elseif ($route == 'update_adm_crit_1') :
	$kriteria->update_adm_c1();
elseif ($route == 'delete_adm_crit_1') :
	$kriteria->delete_adm_c1();
/*
| ------------|
| Criteria 2  |
| ------------|
*/
elseif ($route == 'insert_adm_crit_2') :
  	$kriteria->insert_adm_c2();
elseif ($route == 'update_adm_crit_2') :
	$kriteria->update_adm_c2();
elseif ($route == 'delete_adm_crit_2') :
	$kriteria->delete_adm_c2();
/*
| ------------|
| Criteria 3  |
| ------------|
*/
elseif ($route == 'insert_adm_crit_3') :
  	$kriteria->insert_adm_c3();
elseif ($route == 'update_adm_crit_3') :
	$kriteria->update_adm_c3();
elseif ($route == 'delete_adm_crit_3') :
	$kriteria->delete_adm_c3();
/*
| ------------|
| Criteria 4  |
| ------------|
*/
elseif ($route == 'insert_adm_crit_4') :
  	$kriteria->insert_adm_c4();
elseif ($route == 'update_adm_crit_4') :
	$kriteria->update_adm_c4();
elseif ($route == 'delete_adm_crit_4') :
	$kriteria->delete_adm_c4();
endif;
