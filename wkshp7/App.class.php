
<?php
/*************************************************************************************************
date 20/04/2016
author: Feilim Lawless
Descr: creates class named MyApp; /instantiates new object of class Sphere from within App class
*************************************************************************************************/

include ('Sphere.class.php');

class MyApp 
{
public $aSphere;

public function __construct($diameter)
	{	//instantiates new object of class Sphere from within App class
		$this->aSphere = new Sphere(); 

		//set the diameter	
		$this->aSphere->diameter = $diameter;

		// calculate the radius
		$this->aSphere->radius = ($diameter / 2);

		// calculate circumference of sphere
		$this->aSphere->circumference = $this->aSphere->calcVolume($this->aSphere->radius);

		//using the diameter, calculate the volume 
		$this->volume = $this->aSphere->calcVolume($diameter); 

	} 
}

// following lines of code included for testing purposes

// instantiates new object of class MyApp and passes argument of 4 for Sphere diameter
$newApp= new MyApp(4); 
echo $newApp->aSphere->radius; // returns a value of 2 to the screen
?>