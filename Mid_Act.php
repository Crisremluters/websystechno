<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<?php 
include("myclass.php")

	?>


<body>


<?Php

$ferrari = new car();
$ferrari->set_Make("Ferrari 488 GTB");
$ferrari->set_Speed("205 mph");
echo "Beep! Iam a ".$ferrari->get_Make();
echo " <br>I run at a speed of ".$ferrari->get_Speed();
echo "<br>I am a sports car<br><br>";

$lexus = new car();
$lexus->set_Make("Lexus");
$lexus->set_Speed("130 mph");
echo "Beep! Iam a ".$lexus->get_Make();
echo " <br>I run at a speed of ".$lexus->get_Speed();
echo "<br>I am an ordinary car<br>";


?>

</body>
</html>