<?php

session_start();

$card = $_SESSION['card'];
$amount = $_SESSION['amount'];
$balance = $_SESSION['cards'][$card][3];
$option = $_SESSION['option'];

if($option == "withdraw")
{
	$_SESSION['cards'][$card][3] -= $amount;
	$_SESSION['info-calculate'] = "You have withdrawn money";
	header('Location: info-calculate.php');
	exit();
}
else if($option == "deposit")
{
	$_SESSION['cards'][$card][3] += $amount;
	$_SESSION['info-calculate'] = "You have deposited money";
	header('Location: info-calculate.php');
}

?>