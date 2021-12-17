<?php

session_start();

$card = $_SESSION['card'];
$submenu = $_POST['submenu'];
$_SESSION['submenu'] = $_POST['submenu'];

if($submenu == "name" || $submenu == "surname")
{
	header('Location: name.php');
	exit();
}
else if($submenu == "pin")
{
	header('Location: pin.php');
	exit();
} 
else if($submenu == "check")
{
	$_SESSION['info_data'] = "Your name: ".$_SESSION['cards'][$card][0]."<br>Your surname: ".$_SESSION['cards'][$card][1]."<br>Your PIN: ".$_SESSION['cards'][$card][2];
	header('Location: info_date.php');
}
else if($submenu == "exit")
{
	header('Location: menu.php');
	exit();
}
?>