<?php

session_start();

$card = $_SESSION['card'];
$number = $_SESSION['number'];
$conn = fopen("cards.txt","w");
fclose($conn);

$conn2 = fopen("cards.txt","a");

for($i=0;$i<$number;$i++)
{

	for($j=0;$j<6;$j++)
	{
		fwrite($conn2,$_SESSION['cards'][$i][$j]);
		
		if($j<5)
		{
			fwrite($conn2," ");
		}
	}

}



?>
<!doctype html>
<html>
<head>

	<meta charset="utf-8">
	<title>ATM</title>
	<link rel="stylesheet" href="style.css">

</head>
<body>

<div id="container">

<label><a href=".">Main page</a></label>

<p class="blue">Thank you for using our ATM</p>

</div>

</body>
</html>