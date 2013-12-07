<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class Controller extends CI_Controller{
  public $out = array('errors'=>array(), 'successes'=>array());
  public function __construct()
  {
    parent::__construct();

    if(@$_REQUEST['success']){
      array_push($this->out['successes'], strip_tags($_REQUEST['success']));
    }
    $this->load->library('session');
    $this->__validate_forms();
  }

  public function __validate_forms(){
    $this->validated = false;
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
    if(isset($_POST['form']))
      {
	$method = '__validate_'.$_POST['form'];
	if(method_exists($this, $method)){
	  $this->{$method}();
	  if ($this->form_validation->run() == FALSE){
	    $this->validated = false;
	  }else{
	    $this->validated = true;
	  }

	}else{
	  echo $method.' does not exist!';
	}

      }
  }


  public function render($template='', $out=array()){
    $uri = $_SERVER["REQUEST_URI"];
    $parts = explode('/', $uri);
    @$this->out['page_name'] = $parts[2];
    $this->out= array_merge($this->out, $out);
    $this->out['template'] = $template;
    $this->load->view('layout/default', $this->out);
  }
  
}