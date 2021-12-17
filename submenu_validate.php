<?php

session_start();

$card = $_SESSION['card'];

if(isset($_POST['name']))
{
	$name = $_POST['name'];
	$text = "name";
}

if(isset($_POST['surname']))
{
	$name = $_POST['surname'];
	$text = "surname";
}

$submenu = $_SESSION['submenu'];

if($name == "")
{
	$_SESSION['e_name'] = "Your ".$text." cannot be empty";
	header('Location: name.php');
	exit();
}

$letters = all_letters($name);

if(!$letters)
{
	$_SESSION['e_name'] = "Your ".$text." has to contain only letters";
	header('Location: name.php');
	exit();
}

function all_letters($name)
{
	$how_letters = 0;

	$polish = array("Ą","ą","Ć","ć","Ę","ę","Ł","ł","Ń","ń","Ó","ó","Ś","ś","Ź","ź","Ż","ż");
	$english = array("A","a","C","c","E","e","L","l","N","n","O","o","S","s","Z","z","Z","z");
	$name = str_replace($polish,$english,$name);

	$length = strlen($name);

	$name = strtolower($name);

	for($i=0;$i<$length;$i++)
	{
		if(ord($name[$i]) > 94 && ord($name[$i]) < 123)
		{
			$how_letters++;
		}
	}


	if($length == $how_letters)
	{
		return true;
	}
	else
	{
		return false;
	}
}

$name[0] = strtoupper($name[0]);

$_SESSION['info_data'] = "You have changed your ".$text;

if($text == "name")
{
	$_SESSION['cards'][$card][0] = $name;
}
else
{
	$_SESSION['cards'][$card][1] = $name;
}

header('Location: info_date.php');
?>