<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class Controller extends CI_Controller{
  public $out = array();
  public function __construct(){
    parent::__construct();
  }
  public function render($template='', $out=array()){
    $this->out= array_merge($this->out, $out);
    $this->out['page_name'] = 'Buy';
    $this->load->view('layout/default', $this->out);
  }
  
}