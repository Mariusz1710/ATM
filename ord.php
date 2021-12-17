<?php

/*echo ord("Ą").'<br>';
echo ord("Ć").'<br>';
echo ord("Ę").'<br>';
echo ord("Ł").'<br>';
echo ord("Ń").'<br>';
echo ord("Ó").'<br>';
echo ord("Ś").'<br>';
echo ord("Ź").'<br>';
echo ord("Ż").'<br>';
echo ord("ą").'<br>';
echo ord("ć").'<br>';
echo ord("ę").'<br>';
echo ord("ł").'<br>';
echo ord("ń").'<br>';
echo ord("ó").'<br>';
echo ord("ś").'<br>';
echo ord("ź").'<br>';
echo ord("ż").'<br>';*/



function all_letters($name)
{
	$length = strlen($name);
	$how_letters = 0;

	$name = strtolower($name);
	
	$abc = array("a","b","c");
	$def = array("1","2","3");
	$arr = str_replace($abc,$def,$name);
	echo $arr;
	exit();
	/*$name = strreplace($name);

	for($i=0;$i<$length;$i++)
	{
		echo ord($name[$i]).'  ';

		if(ord($name[$i]) > 64 && ord($name[$i]) < 90)
		{
			echo "1<br>";
			$how_letters++;
		}
		else if(ord($name[$i]) > 94 && ord($name[$i]) < 123)
		{
			echo "2<br>";
			$how_letters++;
		}
		else if(ord($name[$i]) > 194 && ord($name[$i]) < 198)
		{
			echo "3<br>";
			$how_letters++;
		}
	}
*/
	if($length == $how_letters)
	{
		return true;
	}
	else
	{
		return false;
	}
}
//echo ord("ą");
$all = all_letters("abcbca");
var_dump($all);



?>