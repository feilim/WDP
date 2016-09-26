<?php
/***************************************************
date 22/04/2016
author: Feilim Lawless

***************************************************/  
function fillArray($arr)
{
	// populates 2D array with random numbers
	for ($i = 0; $i < 10; $i++)
   	{
   		for ($j = 0; $j < 5; $j++)
   		{
   			$arr[$i][$j] = rand();
   		
   		}
   	    		
 	}
 	
 	return $arr;
}

function getRandLetter()
{
	//generates a random uppercase letter
	//ascii values for A-Z characters are 65-90; chr() returns character at ascii value
	$letter = chr(rand(65,90)); 
	return $letter;
}

function prependArray($arr)
{
	//prepends random uppercase letter to each element in 2D array
	for ($i = 0; $i < 10; $i++)
   	{
   		for ($j = 0; $j < 5; $j++)
   		{
   			$arr[$i][$j] = getRandLetter(). $arr[$i][$j];
   		
   		}
   	    		
 	}
 	
 	return $arr;	
}

$twoDArray = array(array()); // declares empty 2D array

$twoDArray = fillArray($twoDArray); 
print_r($twoDArray);
echo '<br>';

$twoDArray = prependArray($twoDArray); 
print_r($twoDArray);
?>