<?php
echo "<h1>১.১২ - পিএইচপিতে কন্ডিশন (লজিক) এবং লজিকাল অপারেটর নিয়ে আলোচনা</h1>\n";
echo "<h2>Code</h2>\n";
?>


<xmp>
// php code start

$n = 13;
if ($n % 2 == 0) {
	echo "$n is an even number"; // জোড় সংখ্যা
}else {
	echo "$n is a odd number"; // বিজোড় সংখ্যা
}
echo "\n<br>";

if ($n > 12) {
	echo "$n is greater then 10\n<br>";
}else {
	echo "$n is less then 10\n<br>";
}

$a = 12;
$b = 12;

if($a == $b) {
    echo "A is equal to B\n<br>";

}

$alam = 100;
$rahim = 100;
if ($alam == $rahim) {
    echo "Alam has same or more money than Rahim";
}else if ($alam>$rahim) {
    echo "Alam has more money than Rahim";
}else if ($alam<$rahim) {
    echo "Alam has less money than Rahim";
}else if ($alam >= $rahim) {
    echo "alam and Rahim has same amount of money.";
}

echo "\n<br>";

$age = 12;

if($age >= 13 && $age <= 19 ){
    echo "This person is a teenager";
}else {
    echo "This person is not a teenager";
}
echo "\n<br>";
$food = "tuna";

if ( "tuna" == $food || "salmon" == $food ) {
    echo "{$food} has vitamin D";
}else if ("apple" == $food) {
    echo "Apple doesn't contain vitamin D";
}

else {
    echo "we don't know about {$food} contains vitamin D";
}

// php end
</xmp>



<?php
echo "<h2>Result</h2>\n";
// php code start
// logical operators
// == if both are same
$n = 13;
if ($n % 2 == 0) {
	echo "$n is an even number"; // জোড় সংখ্যা
}else {
	echo "$n is a odd number"; // বিজোড় সংখ্যা
}
echo "\n<br>";

if ($n > 12) {
	echo "$n is greater then 10\n<br>";
}else {
	echo "$n is less then 10\n<br>";
}

$a = 12;
$b = 12;

if($a == $b) {
    echo "A is equal to B\n<br>";

}

$alam = 100;
$rahim = 100;
if ($alam == $rahim) {
    echo "Alam has same or more money than Rahim";
}else if ($alam>$rahim) {
    echo "Alam has more money than Rahim";
}else if ($alam<$rahim) {
    echo "Alam has less money than Rahim";
}else if ($alam >= $rahim) {
    echo "alam and Rahim has same amount of money.";
}

echo "\n<br>";

$age = 12;

if($age >= 13 && $age <= 19 ){
    echo "This person is a teenager";
}else {
    echo "This person is not a teenager";
}
echo "\n<br>";
$food = "tuna";

if ( "tuna" == $food || "salmon" == $food ) {
    echo "{$food} has vitamin D";
}else if ("apple" == $food) {
    echo "Apple doesn't contain vitamin D";
}

else {
    echo "we don't know about {$food} contains vitamin D";
}

// php end
?>




