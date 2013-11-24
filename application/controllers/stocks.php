<?php
require_once('controller.php');
class Stocks extends Controller {
  public function __construct(){
    parent::__construct();
    $this->out['app_name']='Stocks';
  }

  public function index()
  {
    $this->load->view('welcome_message');
  }
  
  public function stock(){
    echo 'stock';
    $this->render();
  }
  public function buy(){
    echo 'buy';
  }
}  



