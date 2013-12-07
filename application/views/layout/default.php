<?php echo bcmul('3344444411122', '141341413141');?>
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
      <?php if($user):?>
       <ul id="authenticated">
	 <li><a href="/account/"><?=$user->username?></a> </li>
	 <li><a href="/auth/logout">Logout</a></li>
       </ul>
      <?php endif; ?>

      <h1><a href="/">Main Street</a></h1> 
      <div id="body">
	<h2><a href="/<?=strtolower($app_name)?>"><?php echo $app_name?></a> - <?php echo $page_name ? $page_name : 'Home' ?></h2>
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
