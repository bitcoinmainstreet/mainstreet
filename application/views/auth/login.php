<?php
$form = array(
	      'name'=>'login',
	      'label'=>'Login'
	      );
$form['fields'] = 
[
 ['name'=>'username'],
 ['name'=>'password', 'type'=>"password"],
 ['type'=>'submit']
];
?>

<?php $this->load->view('layout/form', $form)?>
