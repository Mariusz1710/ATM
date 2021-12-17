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

	<form action="submenu_validate.php" method="post">

	<?php

		if($submenu == "name")
		{
			echo '<p>Enter your new name: <input type="text" name="name"></p>';
		}
		else if($submenu == "surname")
		{
			echo '<p>Enter your new surname: <input type="text" name="surname"></p>';
		}

		if(isset($_SESSION['e_name']))
		{
			echo '<p class="error">'.$_SESSION['e_name'].'</p>';
			unset($_SESSION['e_name']);
		}

	?>

		<p><input type="submit" value="OK"></p>
</div>
</body>
</html>