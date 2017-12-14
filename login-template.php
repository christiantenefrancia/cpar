<?php require_once('config.php'); 
	  require_once('include/check_login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<?php require_once('include/login_reminders.php'); ?>
	<form action="login-template.php" method="post">
		<input id="user" type="email" name="username"><br />
		<input id="user" type="password" name="password"><br />
		<input type="submit" value="Submit">
	</form>
</body>
</html>
