<?php 
// eg of url with querystring equal to 20: http://localhost/wkshp5/ex4.php?num=20

$number = $_GET['num'];


$complete = false;
while ($complete == false) {
    
    for ($i=1; $i <= $number; $i++) 
    { 
        print("Number is currently equal to ". $i. "<br>");
    }
    $complete = true;
}

print "<br> End of program."

?>