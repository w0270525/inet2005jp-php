<?php
/**
 * Created by PhpStorm.
 * User: inet2005
 * Date: 11/1/14
 * Time: 2:33 PM
 */

require_once("Shape.php");
class Triangle extends Shape{
	private $base;
	private $height;
	private $area;

	public function __construct($in_base,$in_height){
		$this->base=$in_base;
		$this->height=$in_height;

	}

	public function CalculateSize()
	{
		$this->area=($this->base * $this->height)/2;
		return $this->area;
	}
}