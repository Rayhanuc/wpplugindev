<?php
echo "<h1>১.১৮ - সুইচ কেসের একটা মজার ইস্যু</h1>\n";
echo "<h2>Code</h2>\n";
?>


<xmp>
// php code start

$string = "8balls";
switch ($string) {
    case (string) "9balls":
        echo "Nine Balls";
        break;
    case (string) "8":
        echo "8";
        break;
    case (string) "8balls":
        echo "Eight Balls";
        break;
}

// php end
</xmp>



<?php
echo "<h2>Result</h2>\n";
// php code start
$string = "8balls";
switch ($string) {
    case (string) "9balls":
        echo "Nine Balls";
        break;
    case (string) "8":
        echo "8";
        break;
    case (string) "8balls":
        echo "Eight Balls";
        break;
}


// php end
?>




