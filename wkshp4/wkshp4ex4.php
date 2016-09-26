<?php

$num = 1;
print "The list of prime numbers inside 1 to 100 are ";
while ($num < 101)
{
	$prime = true; //initialise $prime to true until proven otherwise
	for ($i = 2; $i <= $num-1; $i++) 
	// iterate through all numbers less than current value of $num (except 1)
	{
		if ($num % $i == 0) 
		/* if current value of $num divides evenly then it is not prime 
		so set $prime to false and break for loop */
		{ 
			$prime = false;
			break;
		}

		 
	}
	if ($prime != false) // if condition true must be prime number so print
	{
		print ($num . " ");
	}
	$num++;
}


?>
