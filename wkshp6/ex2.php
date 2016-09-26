<?php

function printArray($arr)
{
	$max = count($arr); //finds value of array length
	print ("The array has a total of ". $max . " characters and its contents are as follows: <br>");

	for ($i=0; $i <$max ; $i++) 
	{ 
		print ($arr[$i]. "<br>");

	}
}

$myArray = array(78, 10, 12, 0, 222, 445, 2, 7); // declares and populates array

printArray($myArray); //calls the printArray function

?>