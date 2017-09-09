<!DOCTYPE html>
<html>
<body>
	<?php
//Strings DataType
	$x="Hello Good Morning<br>";
	$y='Hai How are you';
	echo $x.$y;
	echo "<br>";
//Integer DataType
	$x=456;
	var_dump($x);
	echo "<br>";
//float
	$y = 59.85;
	var_dump($y);
	echo "<br>";

//Array
	$watch=array("Balmain","Times","Titan");
	var_dump($watch);
	echo "<br>";
//object

	class Car{
		function Car()
		{
			$this->model= "Swift";
		}
	}
	$terrible = new Car();
	echo $terrible->model;
	?>

</body>
</html>