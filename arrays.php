<?php

$food=array("mutura","kdf","chapati","nuggets","samosa","mukimo","ugali","fish","mandazi");
echo "We love ".$food[4]." and also ".$food[3];
	echo "<br>";
echo count($food);
//looping through the indexed array
$food=count($food);
	echo "<br>";
for($y=0; $y<$food; $y++){
	echo $food[$y];
	echo "<br>";
}



?>