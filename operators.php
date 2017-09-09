<!DOCTYPE html>
<html>
<body>

	<?php
	$x=-10;
	$y=5.5;
echo $x+$y; //add
echo "<br>";
$x=5.50;
$y=30;
echo $x-$y; //sub
echo "<br>";
$x=20;
$z=30;
echo $x*$y."<br>"; //Mul

$x=12;
$y=2;
echo $x**$y."<br>"; //exp

$x=25;
echo $x."<br>";

$x=25;
$x %=2;
echo $x;

$x=25;
$y="325";
var_dump($x === $y);
echo "<br>";
$x=20;
echo $x++;


//Union Operators 
$x=array("a" => "red", "b" => "yellow");
$y=array("c" =>"black" ,"d"=>"green");

print_r($x+$y);
echo "<br>";
//equality

$x=array("a" => "red", "b" => "yellow");
$y=array("c" =>"black" ,"d"=>"green");

var_dump($x <> $y);

//con

$txt1 = "Hello";
$txt2 = " world!";
$txt1 . $txt2;
echo $txt1;


//logical operators and

$x = 100;  
$y = 50;

if ($x == 10 or $y == 50) {
	echo "Hello world!";
}
?>

</body>
</html>
