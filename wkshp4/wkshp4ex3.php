<?php



//initialise to not skip on first iteration
$skip = 0;

// print numbers 8 to 80 in steps of 2..not sure if there's a more efficient way! 
for ($i = 8; $i <= 80; $i++) 
{
    if ($skip == 0) 
 	{ 
 		print ($i . "..."); $skip = 1;  
 		// print number and set condition as false for next iteration
 	}
 	else 
 	{
 		$skip = 0;
 	}
}

 
?>
