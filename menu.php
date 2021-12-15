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

	<form action="option.php" method="post">

		<p><input type="radio" id="withdraw" name="option" value="withdraw" checked>
		<label for="withdraw">Withdraw</label></p>

		<p><input type="radio" id="deposit" name="option" value="deposit">
		<label for="deposit">Deposit</label></p>

		<p><input type="radio" id="check" name="option" value="check">
		<label for="check">Check the balance of the account</label></p>

		<p><input type="radio" id="change" name="option" value="change">
		<label for="change">Change my data</label></p>

		<p><input type="radio" id="exit" name="option" value="exit">
		<label for="exit">Exit</label></p>

		<input type="submit" value="OK">

	</form>

</div>
</body>
</html>