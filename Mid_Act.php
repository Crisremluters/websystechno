<!Doctype Html>
<html>
<?php include("Class.php"); ?>

<body>

<?Php


$ferrari = set_car("Ferrari 488 GTB");
$ferrari->set_maxspeed("205 mph");
echo "ferrari's maxspeed is: "$ferrari->get_maxspeed();
echo " I'm a sportscar";
<br>
$lexus->set_car("lexus");
echo "Beep!  I am a lexus: " . $lexus->get_car();
echo "I am an ordinary car";

?>
  
</body>
</html>


