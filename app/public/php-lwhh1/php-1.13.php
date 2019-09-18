<?php
echo "<h1>১.১৩ - ইফ এলস, লিপ ইয়ার এবং কিভাবে জটিল কন্ডিশন গুলো শর্টকাটে লেখা যায়</h1>\n";
echo "<h2>Code</h2>\n";
?>


<xmp>
// php code start
// 1 - divisible by 4 ?
// 2 - divisible by 100 ?
// 3 - divisible by 400 ?

$year = 2018;
if($year % 4 == && $year % 100 == 0 && $year % 400 == 0) {
    echo "{$year} is a leap year";
}


// php end
</xmp>



<?php
echo "<h2>Result</h2>\n";
// php code start

// 1 - divisible by 4 ?
// 2 - divisible by 100 ?
// 3 - divisible by 400 ?

$year = 2000;
if($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0) {
    echo "{$year} is a leap year";
} else if ($year % 4 == 0 && $year % 100 == 0) {
    echo "{$year} is not a leap year";
} else if($year % 4 == 0) {
    echo "{$year} is a leap year";
}else {
   echo "{$year} is not a leap year"; 
}

// php end
?>




