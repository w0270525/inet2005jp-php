<?php
/**
 * Created by PhpStorm.
 * User: inet2005
 * Date: 10/23/14
 * Time: 5:54 AM
 */

abstract class Shape {

	protected $name;

	public function __construct($in_name){
		$this->name=$in_name;
	}



	abstract public function calculateArea();


} 