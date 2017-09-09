<!DOCTYPE html>
<html>
	<body>
		<?php
		function WriteMsg3(){
			echo "Hello to World";
		}
		function WriteMsg1(){
				echo "Hello to World";
		}
		function WriteMsg2(){
			echo "Hello to World <br>";
		}
		WriteMsg2();
			//Function Argument
		function familyName($fname) {
			echo "$fname Name <br>";
		}
		familyName("jai");
		familyName("varun");
		//Function with two arguments
		function familyN($fname, $year) {
		echo "$fname Name. Born in $year <br>";
		}
		familyN("sai","1975");
		familyN("varun","1978");
		familyN("kumar","1983");
		?>
	</body>
</html>