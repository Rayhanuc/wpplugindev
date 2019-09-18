<?php
echo "<h1>১.১০ - প্রিন্টএফ ফাংশনের জাদু</h1>\n";
echo "<h2>Code</h2>\n";
?>


<xmp>
// php code start

$fname = "Isaac";
$lname = "Newton";
$middlename = "Nothing";
echo "কোনটা আগে আসবে নাম্বার দিয়ে ঠিক করা যায়। এটার নাম হচ্ছে ভেরিয়েবল সোয়াপিং।\n<br>";
printf('His name is %3$s, %1$s %2$s', $fname, $middlename, $lname);
echo "\n<br>";
printf('The binary equivalent of %1$d is %1$b', 16);
echo "\n<br>";
$n = 45.156;

printf("%.2f", $n);

echo "\n<br>";
$o = 123; // 0123
$p = 27; // 0023

printf("%05d \n<br>", $o);
printf("%05d \n<br>", $p);


$a = 123.3253; // 0123
$b = 27.155; // 0023

printf("%08.2f \n<br>", $a);
printf("%08.2f \n", $b);

// php end
</xmp>



<?php
echo "<h2>Result</h2>\n";
// php code start
// argument
$fname = "Isaac";
$lname = "Newton";
$middlename = "Nothing";
echo "কোনটা আগে আসবে নাম্বার দিয়ে ঠিক করা যায়। এটার নাম হচ্ছে ভেরিয়েবল সোয়াপিং।\n<br>";
printf('His name is %3$s, %1$s %2$s', $fname, $middlename, $lname);
echo "\n<br>";
printf('The binary equivalent of %1$d is %1$b', 16);
echo "\n<br>";
$n = 45.156;

printf("%.2f", $n);

echo "\n<br>";
$o = 123; // 0123
$p = 27; // 0023

printf("%05d \n<br>", $o);
printf("%05d \n<br>", $p);


$a = 123.3253; // 0123
$b = 27.155; // 0023

printf("%08.2f \n<br>", $a);
printf("%08.2f \n", $b);


// php end
?>




