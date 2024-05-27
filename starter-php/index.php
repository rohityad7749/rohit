<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
echo "<h2>PHP is Fun!😂</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print "Study PHP at " . $txt2 . "<br>";
print $x + $y;
$string= "Hello World";
echo "<br/>";
$int = 123544;
echo "<br/>";
$boolean = false;
echo "<br/>";
$float =  120.25;
echo "<br/>";

echo gettype($float);
echo "<br/>";
$array = ["Hello",15,16,18,19.23,$x = true];
print_r($array);
echo "<br/>";
var_dump($array);
echo "<br>";
$x = 5;
echo gettype($x);
echo "<br>";
$x = "John";
echo 'Hello $x';
echo "<br>";
$x = "Hello World!";
echo strtolower($x);
echo "<br>";
$x = "Rohit kumar!";
echo str_replace("kumar", "Yadav", $x);
print "<br>";
$x = "Hello World!";
echo strrev($x);
echo "<br>";
$x = " Hello World! ";
echo trim($x);
?> 

<p>The whitespaces are invisible in plain HTML,<br>
but check out the difference in two input fields:</p>

<?php
echo "<input value='" . $x . "'>";
echo "<br>";
echo "<input value='" . trim($x) . "'>";
echo "<br>";
$x = "Hello World!";
$y = explode(" ", $x);
print_r($y);
$x = "Hello";
$y = "World";
$z = $x ."". $y;
echo $z;

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

echo $array[3].' '.$array[0];
echo "<br/>";
echo gettype($array);
echo "<br/>";
$p = 12.3;
var_dump ($p)
?>
</body>
</html>