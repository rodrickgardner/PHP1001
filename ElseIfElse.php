<?php 
	$s=32;
	if ($s<20) {
		# code...
		echo "My Name is Bee";
	}
	elseif ($s<50) {
		# code...
		echo "Name is Bee";
	}
	elseif ($s<100) {
		# code...
		echo "Bee is Bee";
	}
	else{
		echo "Bee";
	}
	echo "<br>";
	$d=date("H");

	if ($d<20 and $d>9) {
		# code...
		echo "It's Early";
	}
	else{
		# code...
		echo "Your Late";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>My BMI Calculator</title>
</head>
<body>
	<!--In php we have methods GET and POST and GET which are used in form handling....Information sent via GET is visible on the URL bar while that sent via POST is invisible.  -->
	<form action="calculate.php" method="POST"> m
		Height: <br>
		<input type="text" name="height" required=""placeholder="Enter height in centimeters"maxlength="3"><br>
		Weight: <br>
		<input type="text" name="weight" required=""placeholder="Enter weight in kilograms"maxlength="3"><br>
		<input type="submit" value="Calculate BMI" >
		<input type="reset" value="Reset" >
	</form>

</body>
</html>