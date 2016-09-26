<?php 
// http://localhost/wkshp6/ex5.php?num=20 (example url with querystring)

$number = $_GET['num']; 
$complete = false;

while ($complete == false) 
{
	for ($i=1; $i <= $number; $i++) //iterate through from 1 to value of $number 
	{ 
		echo ('Number is currently equal to : ' . $i . '<br>'); //print value for each iteration
	}
	$complete = true; //terminate whie loop
	echo 'While and For loops terminated';
}


?>