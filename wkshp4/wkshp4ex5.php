<?php

//initialise
$fib1 = 0;
$fib2 = 1;
$total = 0;

for ($i = 1; $i <= 19; $i++) // loop to print first 20 in fibonacci sequence
{
	$fib3 = $fib1 + $fib2; // sum of previous 2 numbers in sequence
	print ($fib3 . " ");
	$fib1 = $fib2; 
	$fib2 = $fib3;
	$total = $total + $fib3; // keep track of sum of all 20 fibonacci numbers
}

print("average is " . $total/20);

?>
