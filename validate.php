<?php

session_start();

$amount = $_POST['amount'];
$card = $_SESSION['card'];
$option = $_SESSION['option'];
$balance = $_SESSION['cards'][$card][3];

if(!is_numeric($amount))
{
	$_SESSION['e_amount'] = "The amount has to be a numer";
	header('Location: amount.php');
}

if($amount < 0)
{
	$_SESSION['e_amount'] = "The amount has to be positive";
	header('Location: amount.php');
	exit();
}

if($_POST['amount'] % 10 !=0)
{
	$_SESSION['e_amount'] = "The amount has to be divisible by 10";
	header('Location: amount.php');
	exit();
}

if($option == "withdraw" && $amount > $balance)
{
	$_SESSION['e_amount'] = "You don't have enough money";
	header('Location: amount.php');
	exit();
}

$_SESSION['amount'] = $_POST['amount'];

header('Location: calculate.php');




?>