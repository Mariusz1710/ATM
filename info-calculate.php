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

	<form action="menu.php" method="post">

<?php

		echo '<p class="blue">'.$_SESSION['info-calculate'].'</p>';
?>

	<script>

		let yes = new Audio("yes.wav");
		yes.play();

	</script>

		<input type="submit" value="OK">

	</form>


</div>
</body>
</html>