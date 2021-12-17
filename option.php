<?php

session_start();


$card = $_SESSION['card'];
$option = $_POST['option'];
$_SESSION['option'] = $_POST['option'];

if($option == "withdraw" || $option == "deposit")
{
	header('Location: amount.php');
	exit();
} 
else if($option == "check")
{
	$_SESSION['info-calculate'] = "The balance of your account is ".$_SESSION['cards'][$card][3];
	header('Location: info-calculate.php');
	exit();
}
else if($option == "change")
{
	header('Location: submenu.php');
	exit();
}
else if($option == "exit")
{
	header('Location: end.php');
	exit();
}


?>