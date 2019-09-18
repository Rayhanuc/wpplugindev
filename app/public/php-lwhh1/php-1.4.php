<?php
/*
Integer Int
Double / Float
Boolean bool
String string
Null
Array
Object
Resource
*/
echo "Hello";
echo "\n<br/>";
echo 123;

$name = "Earth";
echo "\n<br/>";
var_dump($name);
echo "\n<br/>";
$age = 12;
var_dump($age);
echo "\n<br/>";
$amount = 45.36254;
var_dump($amount);
echo "\n<br/>";
$null = null;
var_dump($null);
echo "\n<br/>";

$name1 = "Rayhan";
$name2 = "Uddin";
$name3 = "Chowdhury";
var_dump($name1, $name2, $name3);
echo "\n<br/>";
// Boolean
$result = true;
var_dump($result);
echo "\n<br/>";
$earth = "Earth";
echo "We are leaving on {$earth}";
echo "\n<br/>"; 
printf("We are leaving on %s",$earth);
echo "\n"; 
$fname = "Isaac";
$lname = "Newton";
printf("His %sName is %s %s","Full", $fname, $lname);
echo "\n<br/>"; 
echo "His
Name
is
{$fname} {$lname}";
echo "\n<br/>"; 

$planet1 = "Mercury";
$planet2 = "Jupiter";
// %s = string
echo "The smallest planet is ".$planet1." and the biggest planet is ".$planet2."\n<br/>";
echo "The smallest planet is {$planet1} and the biggest planet is {$planet2} \n<br/>";

printf("The smallest planet is %s and the biggest planet is %s.\n", strtoupper($planet1), strrev($planet2));
