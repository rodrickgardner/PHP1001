<?php 
//if you wish to sort an indexed array in ascending order, you will use the inbuilt function sort
$myarray2=array(23,56,89,0,3,76,5,4,8,3,46,19,21,33);

sort($myarray2);
//Displaying the values in the array using a for loop
$mylength=count($myarray2);
for ($i=0; $i<$mylength; $i++) { 
	# code...
	echo "$myarray2[$i]";
	echo "<br>";
}





/*

$myarray1=array("cd","hg","ab","ij","kl","ns","pq","rs","rt","qv","z","a","m","c","da","ln");
sort($myarray1);
//Displaying the values in the array using a for loop
$mylength=count($myarray1);
for ($i=0; $i <$mylength; $i++) { 
	# code...
	echo "$myarray1['$i']";
	echo "<br>";
}


*/








?>