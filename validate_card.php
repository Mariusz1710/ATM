<?php

session_start();

$card = $_POST['card'];

$names = file("cards.txt");
$number = count($names);

if($card < 0 || $card > $number -1)
{
	$_SESSION['e_card'] = "There is no such number in our bank";
	header('Location: index.php');
}
else
{
	$_SESSION['card'] = $card;
	header('Location: index2.php');
}


?>