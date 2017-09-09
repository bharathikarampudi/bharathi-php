<!DOCTYPE html>
<html>
<body>
	<?php 
// if statments
	$t=date("H");
	if ($t<"20") {
		echo "hello good morning";
	}

	echo "<br>";
//if else statments

	$t=date("20");
	if ($t<"15") {
		echo "Good";
	} else {
		echo "Morning";
	}
	echo "<br>";
  //if.. elseif..else

	$x=date("25");
	if ($x<20) {
		echo "good";
	} elseif ($x!=10) {
		echo "morning";
	} 
	else{
		echo "good morning";


	}



	?>
</body>
</html>