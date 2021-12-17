<?php

session_start();

?>
<!doctype html>
<html>
<head>

	<meta charset="utf-8">
	<title>ATM</title>
	<link rel="stylesheet" href="style.css">

</head>
<body>

<div id="container">

	<form action="submenu-option.php" method="post">
	
		<p><input type="radio" id="name" name="submenu" value="name" checked><label for="name">Change your name</label></p>
		<p><input type="radio" id="surname" name="submenu" value="surname">Change your surname</label></p>
		<p><input type="radio" id="pin" name="submenu" value="pin"><label for="pin">Change PIN</label></p>
		<p><input type="radio" id="check" name="submenu" value="check"><label for="check">Check your private data</label></p>
		<p><input type="radio" id="exit" name="submenu" value="exit"><label for="exit">Exit</label></p>
		<input type="submit" value="OK">

	</form>

</div>

</body>
</html>