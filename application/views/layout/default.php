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
	<h2><?php echo $app_name?></h2>
	<?php $this->load->view('layout/body');?>
      </div>
	</div>
    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>
</body>
</html>
