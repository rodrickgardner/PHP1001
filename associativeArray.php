<?php

//An a associative array refers to an array that uses name keys that has been assigned to it.
//Thr difference between this and an indexed array is that indexed arrays use numeric indexes starting its count from position 0
$class=array("Bruce"=>"24","Hacker"=>"13","Enoch"=>"18","Gitau"=>"17");

echo "My name is Bruce and I am ".$class['Bruce'];
//loopint through an associative array using a foreach loop
foreach ($class as $y => $y_value) {
	# code...
	echo "Name is ".$y.", and I am ".$y_value;
	echo "<br>";
}
?>