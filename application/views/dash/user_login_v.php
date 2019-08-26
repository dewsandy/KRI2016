<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<title>Administrator KRI 2016 Login</title>
		<meta name="description" content="slick Login">
		<meta name="author" content="Webdesigntuts+">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/dash/login/style.css" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="http://www.modernizr.com/downloads/modernizr-latest.js"></script>
		<script type="text/javascript" src="<?= base_url() ?>asset/dash/login/placeholder.js"></script>
	</head>
	<body>
		<form id="slick-login" style="text-align:center" action="<?= base_url()?>dash/user/dologin" method="POST">			
			<h4>Administrator <b>KRI</b></h4><br/>
			<?php
				if(!empty ($error)){
			?>
			<span style="color:white;"><?= $error ?></span>
			<?php
				}
			?>
			<label for="username">username</label><input type="text" name="username" class="placeholder" placeholder="username"><br/>
			<label for="password">password</label><input type="password" name="password" class="placeholder" placeholder="password">
			<br/>
			<input type="submit" name="submit" value="Log In">
		</form>
	</body>
</html>