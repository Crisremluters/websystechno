<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<?php 
include("Animal.php")

	?>


<body>


<?Php

$Malayan = new Tiger("Malayan", "Black");
echo "Its a ".$Malayan->get_breed();
echo " <br>Its color ".$Malayan->get_color();
echo "<br>It lives in Savannas<br><br>";

$Labrador = new Dog("Labrador", "White");
$Labrador->set_Owner("Arthuro");
echo "its a".$Labrador->get_breed();
echo " <br>Its color ".$Labrador->get_color();
echo "<br>Her master is <br>".$Labrador->get_owner();


?>

</body>
</html>


