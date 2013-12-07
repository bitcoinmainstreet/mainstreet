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
    $this->__validate_forms();
    $this->out['user'] = null;
    $this->user = null;
    if($_SESSION['logged_in_user']){
      //TODO: add timeout (10 min) and update db with time (if time diff is > 1 min)
      $this->out['user'] = $_SESSION['logged_in_user'];
      $this->user = $this->out['user'];
      $_SESSION['last_activity'] = time();
    }
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
    list($uri) = explode('?', $_SERVER["REQUEST_URI"]);
    $parts = explode('/', $uri);
    @$this->out['page_name'] = $parts[2];
    $this->out= array_merge($this->out, $out);
    $this->out['template'] = $template;
    $this->load->view('layout/default', $this->out);
  }
  
}