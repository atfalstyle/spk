<?php

class KriteriasControllers
{
  function __construct($Model_all)
  {
    $this->model = $Model_all;
    $this->table_c1 = "c_pencapaian";
    $this->table_c2 = "c_pencapaian";
    $this->table_c3 = "c_pencapaian";
    $this->table_c4 = "c_pencapaian";
  }

  // Criteria 1

  public function insert_adm_c1()
  {
    $data = array(
      "nama_c1"   => $_POST['nm'],
      "bobot_c1"  => $_POST['bbt']
    );
    $this->model->insert($this->table_c1, $data);
    return redirect(base_url().'/views/admin/beranda.php?kontent=kriteria');
  }

  public function update_adm_c1()
  {
    $where = array('id_c1' => $_POST['id']);
    $data = array(
      "nama_c1"   => $_POST['nm'],
      "bobot_c1"  => $_POST['bbt']
    );
    $this->model->update($this->table_c1, $data, $where);
    return redirect(base_url().'/views/admin/beranda.php?kontent=kriteria');
  }

  public function delete_adm_c1()
  {
    $id = $_GET['id'];
    $this->model->delete($this->table_c1, 'id_c1', $id);
    return redirect(base_url().'/views/admin/beranda.php?kontent=kriteria');
  }

  // Criteria 2

  public function insert_adm_c2()
  {
    $data = array(
      "nama_c2"   => $_POST['nm'],
      "bobot_c2"  => $_POST['bbt']
    );
    $this->model->insert('c_pencapaian', $data);
    return redirect(base_url().'/views/admin/beranda.php?kontent=kriteria');
  }

  public function update_adm_c2()
  {
    $where = array('id_c2' => $_POST['id']);
    $data = array(
      "nama_c2"   => $_POST['nm'],
      "bobot_c2"  => $_POST['bbt']
    );
    $this->model->update('c_pencapaian', $data, $where);
    return redirect(base_url().'/views/admin/beranda.php?kontent=kriteria');
  }

  public function delete_adm_c2()
  {
    $id = $_GET['id'];
    $this->model->delete('c_pencapaian', 'id_c2', $id);
    return redirect(base_url().'/views/admin/beranda.php?kontent=kriteria');
  }

  // Criteria 3

  public function insert_adm_c3()
  {
    $data = array(
      "nama_c3"   => $_POST['nm'],
      "bobot_c3"  => $_POST['bbt']
    );
    $this->model->insert('c_pencapaian', $data);
    return redirect(base_url().'/views/admin/beranda.php?kontent=kriteria');
  }

  public function update_adm_c3()
  {
    $where = array('id_c3' => $_POST['id']);
    $data = array(
      "nama_c3"   => $_POST['nm'],
      "bobot_c3"  => $_POST['bbt']
    );
    $this->model->update('c_pencapaian', $data, $where);
    return redirect(base_url().'/views/admin/beranda.php?kontent=kriteria');
  }

  public function delete_adm_c3()
  {
    $id = $_GET['id'];
    $this->model->delete('c_pencapaian', 'id_c3', $id);
    return redirect(base_url().'/views/admin/beranda.php?kontent=kriteria');
  }

  // Criteria 4

  public function insert_adm_c4()
  {
    $data = array(
      "nama_c4"   => $_POST['nm'],
      "bobot_c4"  => $_POST['bbt']
    );
    $this->model->insert('c_kompetensi', $data);
    return redirect(base_url().'/views/admin/beranda.php?kontent=kriteria');
  }

  public function update_adm_c4()
  {
    $where = array('id_c4' => $_POST['id']);
    $data = array(
      "nama_c4"   => $_POST['nm'],
      "bobot_c4"  => $_POST['bbt']
    );
    $this->model->update('c_pencapaian', $data, $where);
    return redirect(base_url().'/views/admin/beranda.php?kontent=kriteria');
  }

  public function delete_adm_c4()
  {
    $id = $_GET['id'];
    $this->model->delete('c_pencapaian', 'id_c4', $id);
    return redirect(base_url().'/views/admin/beranda.php?kontent=kriteria');
  }
}
