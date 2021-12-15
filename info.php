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

<?php

	if($_SESSION['info'] == "You are logged in")
	{
?>
		<form action="menu.php" method="post">

<?php
		
			echo '<p class="blue">'.$_SESSION['info'].'</p>';
			unset($_SESSION['info']);

?>

	<script>

		let yes = new Audio("yes.wav");
		yes.play();

	</script>

			<input type="submit" value="OK">

		</form>

<?php

	}
	else if($_SESSION['info'] == "Wrong PIN")
	{
?>
		<form action="index2.php" method="post">

<?php	

			echo '<p class="error">'.$_SESSION['info'].'</p>';
			unset($_SESSION['info']);
	
?>

	<script>

		let no = new Audio("no.wav");
		no.play();

	</script>
	
			<input type="submit" value="OK">

		</form>

<?php

	}
	else if($_SESSION['info'] == "Your card is blocked")
	{
?>
		<form action="index.php" method="post">
		
<?php
			echo '<p class="error">Wrong PIN<br>'.$_SESSION['info'].'</p>';
			unset($_SESSION['blocked']);
?>

	<script>

		let no = new Audio("no.wav");
		no.play();

	</script>

			<input type="submit" value="OK">

		</form>
<?php

	}

?>

</div>

</body>
</html>