<!DOCTYPE html>
<html>
<head>
	<title>IfElseStatement</title>
</head>
<body>
	<?php 
		$y=23;
		if ($y>50) {
			# code...
			echo "I am a Potterhead";
		}
		else {
			#code...
			echo "Tom Marvolo Riddle";
		}
	 ?>
	 <br>
	 <?php 
	 	$j=date("H");
	 	/*when using logical operator and, both conditions have to be met for a statement to be considered as true
	 	*/
	 	if ($j<"15" ) {
	 		# code...
	 		echo "Class Time";
	 	}
	 	else {
	 		# code...
	 		echo "Past Class Hours";
	 	}
	  ?>
</body>
</html>