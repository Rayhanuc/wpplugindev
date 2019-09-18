<?php
echo "<h1>১.২ - ভ্যারিয়েবল পরিচিতি</h1>\n";
echo "<h2>Code</h2>\n";
?>


<xmp>
// php code start

$question = "How are you?";
$name = "Bangladesh";
$age = 16;
$word = "age";
echo "\n<br/>";
echo $$word;
echo "\n<br/>";
echo 'Hello ' . $name . " " . $question;
echo "\n<br/>";
echo "Hello {$name} {$question}";

// php end
</xmp>



<?php
echo "<h2>Result</h2>\n";
// php code start
$question = "How are you?";
$name = "Bangladesh";
$age = 16;
$word = "age";
echo "\n<br/>";
echo $$word;
echo "\n<br/>";
echo 'Hello ' . $name . " " . $question;
echo "\n<br/>";
echo "Hello {$name} {$question}";


// php end
?>




