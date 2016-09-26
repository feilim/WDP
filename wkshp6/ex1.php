<?php

$myArray = array(1, 10, 12, 5,  23, 13); // populates array

$max = count($myArray); //finds value of array length

print ("The array has a total of ". $max . " characters and its contents are as follows: <br>");

for ($i=0; $i <$max ; $i++) 
{ 
	print ($myArray[$i]. "<br>");

}

?>