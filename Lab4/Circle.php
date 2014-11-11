<?php
/**
 * Created by PhpStorm.
 * User: inet2005
 * Date: 11/1/14
 * Time: 2:35 PM
 */

require_once("Shape.php");
require_once("iResizable.php");

class Circle extends Shape implements iResizable {

	private $radius;
	private $area;
	private $pi = 3.14159265359;
	private $modifier;

	public function __construct($in_name,$in_radius){
		parent::__construct( $in_name);

		$this->radius=$in_radius;

	}

	public function CalculateSize()
	{
		$this->area=($this->radius*$this->radius)*$this->pi;
		return $this->area;
	}

	public function resize($in_modifier)
	{
		$this->modifier=$in_modifier;
		$this->area=($this->radius*$this->radius)*$this->pi;
		$this->area= $this->area * $this->modifier;
		return $this->area;
	}

}