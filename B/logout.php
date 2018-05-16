<!DOCTYPE html>
<html>
<head>
<?php

	session_start();
	echo "Welcome, " . $_SESSION['name'];
?>

	<title></title>
</head>
<body>
<img src="img/pic.jpg" />

<form action="logout.php" method="post">
	<input type="submit" name="logout" value="log out" />
</form>
<?php
		if(isset($_POST['logout'])){
			session_destroy();
			header("Location: form.html");
		}

?>



</body>
</html>