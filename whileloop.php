<!DOCTYPE html>
<html>
<body>
	<?php

//while
	$x=0;
	while ( $x<= 10) {
		echo "This is number is :$x<br>";	

		$x++;
	}

//Do While 

	$x=0;
	Do
	{
		echo "The number is :$x <br>";
		$x++;
	}
	while ( $x<= 10)

//for each
		

		$colors=array("red","blue");
	foreach ($colors as $value){
		echo "$value";
	}

	

	?>

</body>
</html>

