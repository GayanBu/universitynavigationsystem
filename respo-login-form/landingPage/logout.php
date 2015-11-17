<?php
session_start();
if(isset($_SESSION['user_name'])==true){
	session_destroy();
}
?>
<!DOCTYPE html>
<head>
	<title></title>
</head>
<body>
<h1>Good Bye!you can log once again <a href="http://localhost/respo-login-form/index.php">here</a></h1>
</body>
</html>