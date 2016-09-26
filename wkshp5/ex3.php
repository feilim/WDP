<?php 
// eg of url with querystring equal to 5: http://localhost/wkshp5/ex3.php?mynum=5

$num = $_GET['mynum'];

switch ($num) {
    case 1:
        echo "equals 1";
        break;
    case 2:
        echo "equals 2";
        break;
    case 3:
        echo "equals 3";
        break;
  
    default:
        echo "not equal to 1, 2 or 3";
}
?>