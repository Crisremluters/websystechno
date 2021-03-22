<?php
class vehicle
 {
 	var $make;

 	 function set_Make($make_new)
 {
 $this->make = $make_new;

 }
 	function get_Make()
 {

 return $this->make;
}

}

class car extends vehicle
{
var $maxspeed;

function set_Speed($make_new_car)	
{
	$this->maxspeed = $make_new_car;
}

function get_Speed()
{
	return $this->maxspeed;
}

}

?>