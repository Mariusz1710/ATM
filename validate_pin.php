<?php

session_start();

$card = $_SESSION['card'];

$names = file("cards.txt");
$number = count($names);

for($i = 0; $i < $number; $i++)
{
	$array = explode(" ", $names[$i]);

	for($j = 0; $j < 6; $j++)
	{
		$_SESSION['cards'][$i][$j] = $array[$j];

	}

}

$pin = $_POST['pin'];

if($pin == $_SESSION['cards'][$card][2])
{
	header('Location: menu.php');
}
else
{
	$_SESSION['e_pin'] = "Wrong PIN";
	header('Location: index2.php');
}


?>