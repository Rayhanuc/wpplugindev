<?php

echo "<h1>Current practice Code</h1>";


$name = "Earth";
$uname = strtoupper($name);
echo "We're living on {$uname}<br>";

// printf();
$fname = "Isaac";
$lname = "Newton";
printf("His %s Name is %s %s","Full",$fname,$lname);
echo "<br>";
echo "My
Name
is
{$fname} {$lname},
How Are you?<br/>";

$planet1 = "Mercury";
$planet2 = "Jupiter";
echo "The smallest planet is ".$planet1." and the biggest planet is ".$planet2."\n<br/>";
echo "The smallest planet is {$planet1} and the biggest planet is {$planet2}\n<br/>";

printf("The smallest planet is %s and the biggest planet is %s",$planet1,$planet2);
