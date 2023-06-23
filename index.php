
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form method="post">
		<h1 style="color:whitesmoke;"> Login </h1>
		<input type="text" name="name" placeholder="User name">
		<input type="email" name="email" placeholder="Email">
		<input type="submit" name="register">
	</form>
	<?php 
	include("registrar.php"); 
	?>
</body>
</html>