<?php
echo "<h1>১.১৭ - সুইচকেস নিয়ে আরও কথা</h1>\n";
echo "<h2>Code</h2>\n";
?>


<xmp>
// php code start


// php end
</xmp>



<?php
echo "<h2>Result</h2>\n";
// php code start
$n = -13;
$r = $n % 2;

// switch writing method
switch ($r) {
	case 0:
		switch ($n) {
			case $n>0:
				echo "$n is a positive even number";
				break;
			case $n<0:
				echo "$n is a negative even number";
				break;
		}
		break;
	
	default:
		switch ($n) {
			case $n>0:
				echo "$n is a positive odd number";
				break;
			case $n<0:
				echo "$n is a negative odd number";
				break;
		}
		break;
}
echo "\n<br/>";


// Another switch writing method
switch (true) {
	case (0==$r && $n>0):
		echo "$n is a positive even number";
		break;
	case (1==$r && $n>0):
		echo "$n is a positive odd number";
		break;
	case (0==$r && $n<0):
		echo "$n is a negative even number";
		break;
	case (-1==$r && $n<0):
		echo "$n is a negative odd number";
		break;
}


// php end
?>




