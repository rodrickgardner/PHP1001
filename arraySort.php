<!DOCTYPE html>
<html>
<head>
	<title>arraysort</title>
</head>
<h1>SORTING ARRAYS</h1>
<body>
<H1>We are sorting arrays</H1>
</body>
</html>
<?php
$bla = array("Ted" =>"19","Eve"=>"18","Naum"=>"17","Sharon"=>"14","Rose"=>"16" );
//the inbuilt function asort is used to sort an associative array in ascending order based on its value and not key
//ksort is used to sort it based on its key
//descending order based on key is krsort
//descending order based on value is arsort

asort($bla);
foreach ($bla as $x => $x_value) {
	# code...
	echo "Name is ".$x." and I am ".$x_value;

	#code..
	echo "<br>";
}



?>