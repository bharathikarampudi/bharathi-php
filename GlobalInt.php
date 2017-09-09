<!DOCTYPE html>
<html>
<head>
<body>
<?php
$x="40";
$y="90";
function Test()
{
	GLOBAL $x,$y;
	$x=$x+$y;

}
Test();
{
 echo $x;
}
?>
</body>
</head>
</html>

