v<?php
/* 8x8 dimensional array - chess or checker board size
twoDimArray.php  for Ex.2,3,4 of WkShop 8.
*/

$workshopArray = array();
$workshopArray[0] = array();
$workshopArray[1] = array();
// arrays declared, now go fill it with random numbers
//going from 0 to 63  .. is an 8x8 array, 64 elements.
for  ( $x = 0; $x < 8; $x++)
{
     /*the $x for  controls the x of an x,y type array from class/unit video.
    and the $y controls the y of the x,y array part.*/
    for ($y = 0; $y < 8; $y++)
    {
        //shove a random number 0 - 64 in the present array element marker/pointer
        $workshopArray[$x][$y] = rand(0,64);
    }
    //endfor y
}
//endfor x
//array populated.....  now go prefix each number with
//a capital random letter  ASCII values A =81 , Z = 90 , a = 97, z = 122
//could just stick it in the above loop, but asked/told to write another.
for  ( $x = 0; $x < 8; $x++)
{
     /*the $x for  controls the x of an x,y type array from class/unit video.
    and the $y controls the y of the x,y array part.*/
    for ($y = 0; $y < 8; $y++)
    {
        //shove a random, prepended, uppercase letter in the present array element marker/pointer
        // use : array_unshift ( $workshopArray[$x][$y] , chr(rand(81,90)) )
        $workshopArray[$x][$y] =  chr(rand(65,90)) . $workshopArray[$x][$y];
    }
    //endfor y
}
//endfor x
//see what inside!  xmas !  lol
print_r($workshopArray);

?>