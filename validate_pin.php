<?php

session_start();

$card = $_SESSION['card'];
$tries = $_SESSION['tries'];

$pin = $_POST['pin'];

if($pin == $_SESSION['cards'][$card][2])
{
	$_SESSION['info'] = "You are logged in";
	header('Location: info.php');
}
else
{
	$tries--;

	if($tries == 0)
	{
		$_SESSION['info'] = "Your card is blocked";
		$_SESSION['cards'][$card][4] = "Blocked";
		header('Location: info.php');
		exit();
	}

	$_SESSION['info'] = "Wrong PIN";

	$_SESSION['tries'] = $tries;

	header('Location: info.php');

}
	


?>