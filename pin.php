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

	<form action="pin_validate.php" method="post">

		<p><label>Enter your new PIN:<input type="number" name="pin"></label></p>

<?php

		if(isset($_SESSION['e_pin']))
		{
			echo '<p class="error">'.$_SESSION['e_pin'].'</p>';
			unset($_SESSION['e_pin']);
		}
?>
		<p><label>Confirm your new PIN:<input type="number" name="pin2"></label></p>
		<p><input type="submit" value="OK">

	</form>



</div>

</body>
</html>