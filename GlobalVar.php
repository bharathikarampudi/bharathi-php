<!DOCTYPE html>
<html>
<head>
<title>Global Variable</title>
</head>
<body>
<?php
$x="10";
function assign()
{
	GLOBAL $x;
	$x++;
	echo "<p> Variable x inside function is:$x</p>";

}
assign();
{
	//variable x outside function displays x;
	echo "<p> variable x outside function is:$x</p>";
}
?>
</body>
</html>
