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

	<form action="validate.php" method="post">

		<p><label>Enter the amount: <input type="number" name="amount"></label></p>

	<?php

		if(isset($_SESSION['e_amount']))
		{
			echo '<p class="error">'.$_SESSION['e_amount'].'</p>';
			unset($_SESSION['e_amount']);
		}

	?>

		<input type="submit" value="OK">

	</form>


</div>

</body>
</html>