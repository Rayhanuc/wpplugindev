<?php
echo "<h1>১.১৯ - পিএইচপিতে অপারেটর প্রিসিডেন্স - কে আর আগে রান করে</h1>\n";
echo "<h2>Code</h2>\n";
?>


<xmp>
// php code start

$f = (false || true); // true
$e = false or true; // ($e = false) or true / $e = false
var_dump($f, $e);
echo "\n<br/>";

$g = (true && false);
$h = true and false;

var_dump($g, $h);

// php end
</xmp>



<?php
echo "<h2>Result</h2>\n";
// php code start

$f = (false || true); // true
$e = false or true; // ($e = false) or true / $e = false
var_dump($f, $e);
echo "\n<br/>";

$g = (true && false);
$h = true and false;

var_dump($g, $h);


// php end
?>




