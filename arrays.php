<!DOCTYPE html>
<html>
	<body>
		<?php
		$cars = array("audi","BMW","Maruthi");
		echo "I Like"   .$cars[0] .",".$cars[1]."and".$cars[2];
		
		
		echo "<br>";
		//count
		$cars = array("audi","BMW","Maruthi","Hyundai");
		echo count($cars);
		//loop Indexed array
		$cars=array("audi","BMW", "Hyundai","Maruthi");
		$arrlenght=count($cars);
		for ($x=1; $x <$arrlenght ; $x++) {
		echo $cars[$x];
		echo "<br>";
		}
		?>
	</body>
</html>