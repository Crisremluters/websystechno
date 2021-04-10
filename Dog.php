<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<?php 
include("ClassAnimal.php")

	?>


<body>


<?Php

$Labrador = new Dog();
$Labrador->set_breed("Labrador");
$Malayan->set_color("white");
echo "It's a Labrador".$Labrador->get_breed();
echo "Its's color black".$Labrador->get_color();
echo "<br>Her master is nadine<br>".$Labrador->get_owner();


$Malayan = new Tiger();
$Malayan->set_breed("Malayan");
$Malayan->set_color("white");
echo "It's a Malayan".$Malayan->get_breed();
echo "Its's color white".$Malayan->get_color();
echo "<br>It lives at savannas<br>";


?>

</body>
</html>






