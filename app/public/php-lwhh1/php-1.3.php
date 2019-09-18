<?php
echo "<h1>১.৩ - ভ্যারিয়েবল নিয়ে আরও কথা, কনস্ট্যান্ট এবং কমেন্টস</h1>";

$task = 'Read';
echo $task;
echo "\n<br/>";
$task = "Write";
echo $task;
echo "\n<br/>";

// constant
define('PI',3.14159);
echo "Value of PI = ".PI;
echo "\n<br/>";
echo PI;
// echo constant('PI');
echo "\n<br/>";
$constant = 'constant';
// echo "Value of PI = {$constant('PI')}";

/*
Multiple line comment
Line two
Line three
Line four
*/

// single line comment