<?php

session_start();

$card = $_POST['card'];

/*if(isset($_SESSION['cards']))
{
	echo $_SESSION['cards'][$card][4];
	exit();
}*/

if(!isset($_SESSION['file']))
{
	$names = file("cards.txt");
	$number = count($names);

	for($i = 0; $i < $number; $i++)
	{
		$array = explode(" ",$names[$i]);

		for($j = 0; $j < 6; $j++)
		{
			$_SESSION['cards'][$i][$j] = $array[$j];
		}
	}

$_SESSION['file'] = true;
$_SESSION['number'] = $number;

}

$number = $_SESSION['number'];

if($_SESSION['cards'][$card][4] == "Blocked")
{
	$_SESSION['e_card'] = "Your card is blocked";
	header('Location: index.php');
	exit();
}

if($card < 0 || $card > $number -1)
{
	$_SESSION['e_card'] = "There is no such number in our bank";
	header('Location: index.php');
}
else
{
	$_SESSION['card'] = $card;
	$_SESSION['tries'] = 3;
	header('Location: index2.php');
}


?>