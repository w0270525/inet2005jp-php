<?php
/**
 * Created by PhpStorm.
 * User: inet2005
 * Date: 11/1/14
 * Time: 2:35 PM
 */

require_once("Shape.php");
class Circle extends Shape{

	private $radius;
	private $area;
	private $pi = 3.14159265359;

	public function __construct($in_radius){

		$this->$radius=$in_radius;

	}

	public function CalculateSize()
	{
		$this->area=($this->radius*$this->radius)*$this->pi;
		return $this->area;
	}
}