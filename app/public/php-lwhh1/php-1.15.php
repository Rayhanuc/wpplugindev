<?php
echo "<h1>১.১৫ - পিএইচপিতে টার্নারী অপারেটর এবং নেস্টেড টার্নারী অপারেটর নিয়ে কাজ করা</h1>\n";
echo "<h2>Code</h2>\n";
?>


<xmp>
// php code start
<!-- ternary operator -->
// ternary operator
$n = 10;

if (12 == $n) {
	echo "Twelve";
}else if(10 == $n) {
	echo "Ten";
}else {
	echo "A Number";
}

echo "\n<br/>";

// ternary operator example/use method
// $numberInWord = (12 == $n) ? "Twelve" : "A Number";
$numberInWord = (12 == $n) ? "Twelve" : (10 == $n) ? "Ten" : "A Number";
echo $numberInWord;
echo "\n<br/>";

// Evern or Odd Number check
if ($n % 2 == 0) {
	echo "Even Number";
}else {
	echo "Odd Number";
}
echo "\n<br/>";

// ternary operator example/use method
$result = ($n % 2 == 0) ? "{$n} is an Even Number" : "{$n} is a Odd Number";
echo $result;


// php end
</xmp>



<?php
echo "<h2>Result</h2>\n";
// php code start
// ternary operator
$n = 10;

if (12 == $n) {
	echo "Twelve";
}else if(10 == $n) {
	echo "Ten";
}else {
	echo "A Number";
}

echo "\n<br/>";

// ternary operator example/use method
// $numberInWord = (12 == $n) ? "Twelve" : "A Number";
$numberInWord = (12 == $n) ? "Twelve" : (10 == $n) ? "Ten" : "A Number";
echo $numberInWord;
echo "\n<br/>";

// Evern or Odd Number check
if ($n % 2 == 0) {
	echo "Even Number";
}else {
	echo "Odd Number";
}
echo "\n<br/>";

// ternary operator example/use method
$result = ($n % 2 == 0) ? "{$n} is an Even Number" : "{$n} is a Odd Number";
echo $result;

// php end
?>




