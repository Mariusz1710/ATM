<?php

session_start();

$name = $_POST['name'];
$surname = $_POST['surname'];
$submenu = $_SESSION['submenu'];

if($submenu == "name")
{
	if($name == "")
	{
		$_SESSION['e_name'] = "Your name has not to be empty";
		header('Location: name.php');
		exit();
	}
/*else if($surname == "")
{
	$_SESSION['e_name'] = "Your surname has not to be empty";
	header('Location: name.php');
	exit();
}*/

		$letters = all_letters($name);
		var_dump($all_letters);
		exit();

}


function all_letters($name)
{
	$length = strlen($name);
	$how_letters = 0;

	$polish = array("Ą","ą","Ć","ć","Ę","ę","Ł","ł","Ń","ń","Ó","ó","Ś","ś","Ź","ź","Ż","ż");
	$english = array("A","a","C","c","E","e","L","l","N","n","O","o","S","s","Z","z","Z","z");
	$name = str_replace($polish,$english,$word);
	echo $name;
	exit();

	for($i=0;$i<$length;$i++)
	{
		if(ord($name[$i] > 64 && ord($name[$i] < 90)
		{
			$how_letters++;
		}
		else if(ord($name[$i] > 94 && ord($name[$i] < 123)
		{
			$how_letters++;
		}
		else if(ord($name[$i] > 194 && ord($name[$i] < 198)
		{
			$how_letters++;
		}
	}
}
?>