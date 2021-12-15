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
	
		<p><label for="name">Change your name</label><input type="radio" id="name" name="submenu" checked></p>
		<p><label for="surname">Change your surname</label><input type="radio" id="surname" name="submenu"></p>
		<p><label for="check">Check your provate data</label><input type="radio" id="check" name="submenu"></p>
		<p><label for="change">Change your private data</label><input type="radio" id="check" name="submenu"></p>
		<p><label for="exit">Exit</label><input type="radio" id="exit" name="submenu"></p>

	</form>

</div>

</body>
</html>