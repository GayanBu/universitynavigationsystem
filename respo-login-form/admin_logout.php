<?php
session_start();
if(isset($_SESSION['user_name'])=="admin"){
	session_destroy();
}
?>
<!DOCTYPE html>
<head>
	<title></title>
</head>
<body>
<h1>Good Bye admin!login again <a href="http://localhost/respo-login-form/index.php">here</a></h1>
</body>
</html>