<!DOCTYPE html>
<html>
<head>
	<title>My first form</title>
	<style type="text/css">
		body{background-image: url(IMG/5.jpg);
			background background-repeat: no-repeat;
			background-size: 100px;
		}
		form{
			color:#ffffff;
			font-size: 34px;
			font-family: chiller;
		}
		h3{
			color: #ffffff;
			font-size: 40px;
			font-family: chiller;
		}
		p{
			color: #ffffff;
			font-size: 40px;
			font-family: chiller;
		}
		input[type=text],select,[type=paassword]{
			width: 100%
			padding: 20px;
			margin: 8px;
			display: inline-block;
			border-radius: 5px 
		}
		input[type=submit]{
			width: 80%;
			background-color: green;
			color: gray;
			padding: 20px;
			border-radius: 5px;
			cursor: pointer;
		}
		input[type=sbmit]: hover{
			background-color: #00001a;
		}
	</style>
</head>
<body>
<h3>SIGNUP FORM</h3>
<h5>Please fill this sign-up form</h5>
    <form action="index.php" method="POST">
    	<label for="fname"> first name</label><br>
    	<input type="text" name="firstname" placeholder="Enter first name here" id="fname" required=""><br>
		<label for = "sname">Surname</label><br>
		<input type="text" name="surname" placeholder="Enter surname" id="sname" required="">
		<br>
		<input type="radio" name="gender" value="male" checked="">Male<br>
		<input type="radio" name="gender" value="female">Female<br>
		<input type="radio" name="gender" value="N/A">Prefer not to disclose<br>
		<label for="calender"> Date of birth</label><br>
		<input type="date" name="calender" placeholder="date"><br><br>
		<label>Enter Password</label><br>
		<input type="password" name="psw" placeholder="Enter Password" required=""><br>
		<label>Confirm Password</label><br>
		<input type="password" name="psw2" placeholder="Confirm Password" required=""><br>
		<!-- We are going to use a select tag to enable one to choose form a dropdown-->
		<label>Country</label>
			<select>
				<option>Internet of Things</option>
				<option>Java for Beginners</option>
				<option>HTML5</option>
				<option>Android Application Development</option>
			</select><br><br>
			<input type="submit" name="submit" value="SUBMIT">
	</form>
	<a href="login.html" style="font-style: italic;font-size: 20px">already have an account? click here to login</a>

</body>
</html>