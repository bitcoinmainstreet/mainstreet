<?php
$form = array(
	      'name'=>'register',
	      'label'=>'Register'
	      );
$form['fields'] = 
[
 ['name'=>'username'],
 ['name'=>'password', 'type'=>"password"],
 ['name'=>'retype_password', 'type'=>"password", 'label'=>'Retype Password'],
 ['type'=>'submit']
];
?>

<?php $this->load->view('layout/form', $form)?>
