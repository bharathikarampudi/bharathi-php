<!DOCTYPE html>
<html>
	<body>
		<?php
		function Name($fname,$year){
			echo "$fname Born in $year <br>";
		}
		Name("sai Kumar","1984");
		Name("venkat","1945");
		Name("kumar","1986");
		echo "<br>";
		//setHeight
		function setHeight($minheight=100){
		echo "The height is:$minheight <br>";
		}
		setHeight(850);
		setHeight(150);
		setHeight();
		//Function Sum
		function sum($x,$y){
		$z=$x+$y;
		return $z;
		}
		echo "5+58= " .sum(5,58)."<br>";
		echo "65+78= ".sum(65,78);
		?>
	</body>
</html>