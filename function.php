<?php
function writeMsg($i,$j) 
{ 
	echo "Hello world!";
	echo $i;
	echo $j;
}

$a=10;
$b="subbu";
writeMsg($a,$b); // call the function

function sum($x, $y) {
	$z = $x + $y;
	return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);

$cars = array("Volvo", "BMW", "Toyota");
array_push($cars, "Audi");
array_push($cars, "ghg");
var_dump($cars);
echo "<br>";
array_pop($cars);
var_dump($cars);

/*for ($i=0; $i <count($cars) ; $i++) { 
echo $cars[$i];
}*/



function familyName($fname,$year){
  echo
  

}



?>