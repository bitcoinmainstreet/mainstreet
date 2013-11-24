<?php
require_once('controller.php');
class Auth extends Controller {

  public function __construct()
  {
    parent::__construct();
    $this->out['app_name']='Auth';
  }

  public function __validate_login()
  {
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
  }

  public function login()
  {
    $this->render('auth/login');
  }

  public function register()
  {
    $this->render('auth/register');
  }
  
}  



