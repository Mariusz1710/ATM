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

		<?php

			if(isset($_SESSION['e_pin']))
			{
				echo '<p class="error">'.$_SESSION['e_pin'].'</p>';
				unset($_SESSION['e_pin']);
			}


		?>
		<input type="submit" value="OK">


</div>
</body>
</html>