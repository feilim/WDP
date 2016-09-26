<?php
/***************************************************
date 19/04/2016
author: Feilim Lawless
descr: declares class named Sphere
***************************************************/

class Sphere
{
	public $diameter;
	public $radius;
	public $circumference;
	public $volume;

	const PI = 3.14;
	const FOUR_THIRDS = 1.33;

	/*public function __construct($diameter)
	{
		//set the diameter	
		$this->diameter = $diameter;

		// calculate the radius
		$this->radius = ($diameter / 2);

		// calculate circumference of sphere
		$this->circumference = $this->calcVolume($this->radius);

		//using the diameter, calculate the volume 
		$this->volume = $this->calcVolume($diameter);

	} */

	public function calcCircumference($radius)
	{
		return ((2 * pi()) * ($radius));
	}

	public function calcVolume($diameter)
	{
		return ((pi() * pow($diameter, 3)) / 6);
	}

	public function setRadius($rad)
	{
		$this->radius = $rad;
	}

	public function calcArea($radius)
	{
		return ((4 * pi()) * ($radius * $radius));
	}

	public function calcDiameter($radius)
	{
		return (2 * $radius);
	}
}



?>