<?php
class Dog
 {
 	var $breed;

 	 function __construct($Dogs_breed)
 {
 $this->breed = $dogs_breed;

 }
 	function set_breed($new_breed)
 {
$this->breed = $new_breed;
}

 function get_breed(){
	 return $this->breed;
 }

}
function set_owner($owner_new)
{
$this->owner = $owner_new;
}
function get_owner()
{
return $this->owner;
}
}

class Tiger extends Dog
{
var $color;

function set_Speed($color_new_tiger)	
{
	$this->color= $color_new_tiger;
}

function get_color()
{
	return $this->color;
}

}

?>


