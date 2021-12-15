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

	<form action="validate_pin.php" method="post">

		<p><label>Enter PIN: <input type="number" name="pin"></label></p>

		<input type="submit" value="OK">

	</form>

</div>
</body>
</html>