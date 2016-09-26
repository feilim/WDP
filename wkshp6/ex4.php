<?php
class MyArray 
{
	public $myArr = array(); // defines array

	public function setArray(...$args) // ... splat operator takes in flexible amount of arguments
	{
		
		$index=0;
		foreach($args as $val) 
		{
    		$this->myArr[$index] = $val; // populates array with arguments
    		$index++;
		}
		/*$max = count($args);
		for ($i=0; $i <$max ; $i++) 
		{ 

		}	*/
	}

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
$newArray->setArray(1,3,56,7,89,6,234,63); //assigns values to array using setArray method
$newArray->printArray() // envokes the printArray() method for object "$newArray" of class "MyArray"

?>