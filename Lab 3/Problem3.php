<html>
<body>
<h1><b><u>Problem 3</u></b></h1>
<?php 
$length=12;
$width=12;

$perimeter=2 * ($length + $width);
$area=$length * $width;
echo"The perimeter of rectangle is: ".$perimeter;
echo"<br>The area of rectangle is: ".$area;

if($length == $width)
{
	echo"<br>The shape is square.";
}
else
{
	echo"<br>The shape is not square.";
}
?>
</body>
</html>