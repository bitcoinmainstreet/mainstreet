<?php
require_once('model.php');
class User_model extends Model {

  public function __construct()
  {
    parent::__construct();

  }


  public function login_test(){
    $user = $this->get_user($this->input->post('username'));
    if(!$user){
      return array(false, 'User not found');
    }
    if(!password_verify($this->input->post('password'), $user->password_hash)){
      return array(false, 'Invalid password');
    }
    return array(true, 'User logged in');
  }

  public function get_user($username){
    $query = $this->db->get_where('user', array('username'=>$username));
    foreach ($query->result() as $row)
      {
	return $row;
      }
    return false;
  }

  public function user_exists($username){
    return $this->get_user($username);

  }
  
  public function register(){
    
    $user = array(
		  'username'=>$this->input->post('username'),
		  'password_hash'=>password_hash($this->input->post('password'), PASSWORD_BCRYPT)
		  );
    if(!$this->db->insert('user', $user)){
      echo 'err';exit;
    }
  }

}