<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//a handy place to put all things that should be available in all controllers

class CI_Controller_Extender extends CI_Controller {
      public function __construct(){
      	     parent::__construct(); 
	     $this->load('form');
	     $this->load('utils');
      }

      public function render($view = null, $data=array()){
      	     $this->load->view('
      }
      
}