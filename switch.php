<!DOCTYPE html>
<html>
<head>
	<title>Switch Statement</title>
</head>
<body>
	<!--Switch statement is used to perform a variety of actions based on different cnditions that have been started-->
	<?php
		$name="Allela";
		switch($name){
			case 'Alle':
			#code......
			echo "My name is not Alle";
				break;
			case 'Allella':
			#code....
			echo "My name is not Allella";
				break;
			case 'Allela':
			#code.....
			echo "Yipee thats me";
				break;

			default:
				#code.....
			echo "You got my name wrong";
				break;

		}
		//Assignment: Come up with a system that can recieve input form a range of 0-9 from the user using a switch statement, giving feedback based on the value selected.

	?>

</body>
</html>