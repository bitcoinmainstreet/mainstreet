<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once('controller.php');
class Welcome extends Controller {
  public function __construct(){
    parent::__construct();
    $this->out['app_name']='Welcome';
  }
  public function index()
  {
    //		$this->load->view('welcome_message');
    $this->render('welcome_message');
  }
}
