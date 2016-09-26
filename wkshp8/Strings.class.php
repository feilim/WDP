
<?php
/*************************************************************************************************
date 21/04/2016
author: Feilim Lawless
*************************************************************************************************/



class MyString
{	
	public $aString;

	public function __construct($aString)
	{
		//instantiate the class	
		$this->aString = $aString;
	}

	public function setString($str)
	{
		$this->aString = $str;
	}

	public function uppCaseString($str)
	{
		 return $str = strtoupper($str);
	}

	public function lwrCaseString($str)
	{
		return $str = strtolower($str);
	}

	public function eStringCheck($str)
	{	//returns the postion of the first occurance of the character 'e' in a string
		$arr = str_split($str); //converts string into array
		$length = count($arr); // calculates length of array
		$found = FALSE;
		$i=0; 
		while ($i <= $length && $found != TRUE) 
		{
			
			if ($arr[$i] == 'e') 
			{
				
				return $i;
				$found = TRUE;
			}
			else if ($i == $length)
			{
				return 'not found';
			}
			$i++;

		}
	}
}




?>