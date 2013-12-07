<?php
require_once('controller.php');
class Auth extends Controller {

  public function __construct()
  {
    parent::__construct();
    $this->out['app_name']='Auth';
    $this->load->model('User_model');

  }

  public function index(){
    $this->render('auth/index');
  }
  public function __validate_login()
  {
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
  }

  public function login()
  {
    if($this->validated){
      list($success, $message, $user) = $this->User_model->login_test();
      if(!$success){
	$this->out['errors'][] = $message;
      }else{
	$this->out['successes'][] = $message;
	$_SESSION['logged_in_user'] = $user;
	$_SESSION['last_activity'] = time();
	redirect('/?success='.urlencode($message), 'refresh');
      }
    }
    $this->render('auth/login');
  }


  public function __validate_register(){
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
  }

  public function register()
  {
    if($this->validated){
      if($this->User_model->user_exists($this->input->post('username'))){
	array_push($this->out['errors'], 'User exists');
      }else{
	$this->User_model->register();
	redirect('/auth/login?success=Account%20created.%20Please%20log%20in.', 'refresh');
      }
    }
    $this->render('auth/register');
  }
  
}



