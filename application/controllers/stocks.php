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
    //the template path thing should be done in parent class. how to get calling function?
    $this->render(strtolower($this->out['app_name']).'/'.__function__);
  }
  public function buy(){
    echo 'buy';
  }
}  



