<?php
class MyArray 
{
	public $myArr = array(1212, 7845, 10, 12, 0, 222, 445, 2, 7); // defines and populates array

	public function printArray()
	{
		$max = count($this->myArr); //finds value of array length
		print ("The array has a total of ". $max . " characters and its contents are as follows: <br>");

		for ($i=0; $i <$max ; $i++) 
		{ 
			print ($this->myArr[$i]. "<br>");

		}
	}
}


$newArray = new MyArray(); // creates new object "$newArray" of class "MyArray"
$newArray->printArray() // envokes the printArray() function for object "$newArray" of class "MyArray"

?>