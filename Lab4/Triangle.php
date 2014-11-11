<?php
/**
 * Created by PhpStorm.
 * User: inet2005
 * Date: 11/1/14
 * Time: 2:33 PM
 */

require_once("Shape.php");
class Triangle extends Shape implements iResizable
{
	private $base;
	private $height;
	private $area;
	private $modifier;

	public function __construct($in_name,$in_base,$in_height){
		parent::__construct( $in_name);
		$this->base=$in_base;
		$this->height=$in_height;

	}

	public function CalculateSize()
	{
		$this->area=($this->base * $this->height)/2;
		return $this->area;
	}

	public function resize($in_modifier)
	{
		$this->modifier=$in_modifier;


		$this->area=(($this->base*$this->modifier) * $this->height)/2;
		return $this->area;

	}
}