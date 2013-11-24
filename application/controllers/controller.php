<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class Controller extends CI_Controller{
  public $out = array();
  public function __construct()
  {
    parent::__construct();
    if(isset($_POST['form']))
      {
	$this->load->helper(array('form', 'url'));
	$this->load->library('form_validation');

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
    $this->out= array_merge($this->out, $out);
    $this->out['template'] = $template;
    $this->out['page_name'] = 'Buy';
    $this->load->view('layout/default', $this->out);
  }
  
}