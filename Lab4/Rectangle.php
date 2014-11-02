<?php
/**
 * Created by PhpStorm.
 * User: inet2005
 * Date: 11/1/14
 * Time: 2:35 PM
 */

require_once("Shape.php");
class Rectangle extends Shape {

	private $base;
	private $height;
	private $area;

	public function __construct($in_name,$in_base,$in_height){
		parent::__construct( $in_name);

		$this->$base=$in_base;
		$this->$height=$in_height;


	}
	public function CalculateSize()
	{
		$this->area=$this->base * $this->height;
		return $this->area;

	}
}