<?php

session_start();
$submenu = $_SESSION['submenu'];

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

	<form action="submenu.php" method="post">

<?php

		echo '<p class="blue"><label>'.$_SESSION['info_data'].'</label></p>';

?>

	<script>

		let yes = new Audio("yes.wav");
		yes.play();

	</script>

		<p><input type="submit" value="OK"></p>

	</form>

</div>

</body>
</html>