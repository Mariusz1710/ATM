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

	<form action="validate_card.php" method="post">

		<p><label>Enter the number of a card: <input type="number" name="card"></label></p>

		<?php

			if(isset($_SESSION['e_card']))
			{
				echo '<p class="error">'.$_SESSION['e_card'].'</p>';
		?>

		<script>

			let no = new Audio("no.wav");
			no.play();

		</script>

		<?php

				unset($_SESSION['e_card']);
			}

		?>

		<input type="submit" value="OK">

	</form>

</div>

</body>
</html>