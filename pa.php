<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<?php 
include("ma.php")

	?>


<body>


<?Php

$Malayan = new tiger();
$Malayan->set_breed("Malayan");
$Malayan->set_Color("Black");
echo "Its a ".$Malayan->get_breed();
echo " <br>Its color ".$Malayan->get_color();
echo "<br>It lives in Savannas<br><br>";

$Labrador = new dog();
$Labrador->set_breed("Labrador");
$Labrador->set_color("white");
$Labrador->set_owner("NAdine");
echo "its a".$Labrador->get_breed();
echo " <br>Its color ".$Labrador->get_color();
echo "<br>Her master is <br>".$Labrador->get_owner();


?>

</body>
</html>


