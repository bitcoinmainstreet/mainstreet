<?php
require_once('controller.php');
class Auth extends Controller {
  public function __construct(){
    parent::__construct();
    $this->out['app_name']='Auth';
  }

  public function login()
  {
    $this->load->view('auth/login');
  }

  public function register()
  {
    $this->load->view('auth/register');
  }

  
}  



