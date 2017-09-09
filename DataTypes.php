<!DOCTYPE html>
<html>
<body>
	<?php
		//String Data type
	$X="Hello php";
	$y='Hello php';
	echo $X ."<br>";
	echo $y."<br>";
		//Interger Data Type
	$x =455;
	var_dump($x);
	echo "<br>";
		//Float
	$x=2.8;
	var_dump($x);
	echo "<br>";
		// Array
	$cars=array("BMW","audi","Volvo","Maruthi");
	var_dump($cars);
	echo "<br>";
		//Object
	class car{
		function car(){
			$this->model="BMW";
		}
	}
		//create an object
	$subbu=new car();
		//show object properties
	echo $subbu->model;
	echo "<br>";
		//NULL Value
	$x="Hello php";
	$x=null;
	$x="hello";
	$x=null;
	var_dump($x);

	?>
</body>
</html>