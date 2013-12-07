<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Main Street - $app_name</title>
    <link rel="stylesheet" type="text/css" href="/css/default.css" />
    <link rel="stylesheet" type="text/css" href="/css/form.css" />
  </head>
  <body>
    <div id="container">
      <h1>Main Street</h1> 
      <div id="body">
	<h2><a href="/<?=strtolower($app_name)?>"><?php echo $app_name?></a> - <?php echo $page_name?></h2>
	<?php foreach($errors as $error): ?>
	  <div class="error"><?=$error?></div>
	<?php endforeach;?>
	<?php foreach($successes as $success): ?>
	  <div class="success"><?=$success?></div>
	<?php endforeach;?>
	<?php $this->load->view('layout/body');?>
      </div>
	</div>
    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>
</body>
</html>
