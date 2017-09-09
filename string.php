<!DOCTYPE html>
<html>
<body>

	<?php
echo strlen("welcome")."<br>"; // String Length
echo strlen("string of Length"); 
echo "<br>";
echo str_word_count("Hello World")."<br>"; //string word count
echo str_word_count("String Word count");
echo "<br>";
echo strrev("String")."<br>"; //string reverse
echo strrev("reverse");
echo "<br>";
echo strpos("my first strings first","first","4")."<br>"; //string Position
echo strpos("Hello php database","php","2");
echo "<br>";
echo str_replace("world", "Dolly", "Hello world"); //String Replace 
echo "<br>";
echo wordwrap("The PHP string functions            are part of   the PHP core. No installation is required to use these functions.");

?>
</body>
</html>

