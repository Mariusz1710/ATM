<?php

session_start();

$card = $_SESSION['card'];

$pin = $_POST['pin'];
$pin2 = $_POST['pin2'];

$pin_length = strlen($pin);

if($pin_length !=4)
{
	$_SESSION['e_pin'] = "PIN has to be four digit number";
	header('Location: pin.php');
	exit();
}

$numeric = true;

for($i=0;$i<4;$i++)
{
	if(!is_numeric($pin[$i]))
	{
		$numeric = false;
	}
}

if($numeric == false)
{
	$_SESSION['e_pin'] = "All PIN has to be numeric";
	header('Location: pin.php');
	exit();
}

if($pin !=$pin2)
{
	$_SESSION['e_pin'] = "Both PINs have to be the same";
	header('Location: pin.php');
	exit();
}

$_SESSION['info_data'] = "You have changed your PIN";

$_SESSION['cards'][$card][2] = $pin;

header('Location: info_data.php');


?>