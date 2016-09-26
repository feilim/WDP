
<?php
/*************************************************************************************************
date 20/04/2016
author: Feilim Lawless

*************************************************************************************************/

include ('Strings.class.php');


// instantiates new object of class MyString with value 'This is the original string'
$newStringObj = new MyString('This is the original string'); 
echo ($newStringObj->aString . '<br>');

//resets string to 'This is the resetted string'
$newStringObj->setString('This is the resetted string'); 
echo $newStringObj->aString;

//returns string as all uppercase (note: value of '$newStringObj->aString' not reset)
echo ('<br> This the string returned as all uppercase: ' .  $newStringObj->uppCaseString($newStringObj->aString)); 
//returns string as all lowercase (note: value of '$newStringObj->aString' not reset)
echo ('<br> This the string returned as all lowercase: ' .  $newStringObj->lwrCaseString($newStringObj->aString)); 

// finds first occurance of letter 'e' in string. Add 1 because of zero index in array
$ePos = ($newStringObj->eStringCheck($newStringObj->aString) + 1); 

echo ("<br> The letter 'e' first occurs at position " . $ePos  . " in the string");

?>