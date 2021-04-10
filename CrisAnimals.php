<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<?php 
include("MiAnimals.php");

	?>


<body>


<?Php

$Caspian = new Tiger("Caspian", "Golden");
echo "Its a ".$Caspian->get_breed();
echo " <br>Its color is ".$Caspian->get_color();
echo "<br>It lives in the Jungle<br><br>";

$Akita = new Dog("Akita", "White");
$Akita->set_Owner("Florida");
echo "Its ".$Akita->get_breed();
echo " <br>Its color ".$Akita->get_color();
echo "<br>Her master is ".$Akita->get_owner();


?>

</body>
</html>

