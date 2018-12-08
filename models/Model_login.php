<?php
session_start();
class Model_login
{
  private $db;
  function __construct($dbs)
  {
    $this->db = $dbs;
  }

  public function doLogin($username, $password)
  {
    try {
      $login = $this->db->prepare("SELECT * FROM dt_user WHERE username = ? AND pass = ? ");
      $login->bindParam(1, $username);
      $login->bindParam(2, md5($password));
      $login->execute();
      $data = $login->fetch(PDO::FETCH_OBJ);
      $id   = $data->id_user;
      $lvl  = $data->lvl;
      $cek  = $login->rowCount();

      if ($cek > 0) {
        if ($lvl == 1) {
          header('location: ../views/admin/beranda.php?konten');
          $_SESSION['admin'] = $id;
          $_SESSION['lvl']   = $lvl;
        } else if ($lvl == 2) {
          header('location: ../views/manager/beranda.php?konten');
          $_SESSION['manager'] = $id;
          $_SESSION['lvl']   = $lvl;
        } else if ($lvl == 3) {
          header('location: ../views/user/beranda.php?konten');
          $_SESSION['user'] = $id;
          $_SESSION['lvl']   = $lvl;
        }
      } else {
        header('location: ../views/login.php');
        // echo "<script>window.location='../views/login.php'</script>";
        $_SESSION['flashdata'] = "Username Atau Password Salah";
      }
      return true;

    } catch (PDOException $e) {
      echo $e->getMessage();
      return false;
    }
  }
}
