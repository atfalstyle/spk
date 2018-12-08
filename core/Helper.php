<?php
  function redirect($url)
  {
    echo header('Location:'.$url);
  }

  function base_url()
  {
    $base_url = "http://localhost/project_spk/"; // disesuaikan sesuai direktori root dokumen
    return $base_url;
  }
?>
