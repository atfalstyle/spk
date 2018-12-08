<?php

class LoginsControllers
{
    function __construct($Model_login)
    {
      $this->model = $Model_login;
    }

    public function toLogin()
    {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $this->model->doLogin($username, $password);
      return true;
    }

    public function logOut()
    {
      session_destroy();
      redirect(base_url().'index.php');
      return true;
    }
}
