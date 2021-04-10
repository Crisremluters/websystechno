<?php
class animal
 {
 	var $breed;
	 var $color;

 	 function set_Breed($breed_new)
 {
 $this->breed = $breed_new;

 }
 	function get_Breed()
 {

 return $this->breed;
}
    function set_Color($color_new) 
	{
		$this->color = $color_new;

	}
	function get_Color()
	{
		return $this->color;
	}
}

class dog extends animal
{
var $owner;

function __construct($breed,$color)
{
$this->breed = $breed;
$this->color = $color;
}
function set_Owner($owner_new)	
{
	$this->owner = $breed_color;
}

function get_Owner 
{
	return $this->owner;
}	

class tiger extends animal
{
	function __construct($breed,$color)
	{
	$this->breed = $breed;
	$this->color = $color;
	}
	
{




?>




