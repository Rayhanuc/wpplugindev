<?php
echo "<h1>১.১৬ - কন্ডিশন চেক করার আরেকটি উপায় - সুইচকেস</h1>\n";
echo "<h2>Code</h2>\n";
?>


<xmp>
// php code start
<!-- ternary operator -->

// switch case
$n = 10;
$r = $n % 2;
switch($r){
	case 0:
		echo "{$n} is an even number \n<br/>";
		break;
	default: // or অথবা
		echo "{$n} is an odd number \n<br/>";
}

// $color = 'red';
$color = 'green';
// $color = 'blue';
// $color = 'black';
switch ($color) {
	/*case 'red':
		echo "Red is our favorite color";
		break;
	case 'green':
		echo "Green is our favorite color";
		break;*/

	case 'red':
	case 'green':
		echo ucwords($color)." is our favorite color"; /*ucwords for first letter capitalized*/
		break;
	case 'blue':
		echo  ucwords($color)." is not our favorite color";
		break;
	
	default:
		echo "This {$color} color is ok";
		// break;
}

// old method
/*if ('red' == $color || 'green' == $color) {
	# code...
}*/

// php end
</xmp>



<?php
echo "<h2>Result</h2>\n";
// php code start
// switch case
$n = 10;
$r = $n % 2;
switch($r){
	case 0:
		echo "{$n} is an even number \n<br/>";
		break;
	default: // or অথবা
		echo "{$n} is an odd number \n<br/>";
}

// $color = 'red';
$color = 'green';
// $color = 'blue';
// $color = 'black';
switch ($color) {
	/*case 'red':
		echo "Red is our favorite color";
		break;
	case 'green':
		echo "Green is our favorite color";
		break;*/

	case 'red':
	case 'green':
		echo ucwords($color)." is our favorite color"; /*ucwords for first letter capitalized*/
		break;
	case 'blue':
		echo  ucwords($color)." is not our favorite color";
		break;
	
	default:
		echo "This {$color} color is ok";
		// break;
}

// old method
/*if ('red' == $color || 'green' == $color) {
	# code...
}*/

// php end
?>




