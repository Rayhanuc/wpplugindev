<?php
echo "<h1>১.১৪ - নেস্টেড ইফ এলস এবং কোডের রিডেবিলিটি</h1>\n";
echo "<h2>Code</h2>\n";
?>


<xmp>
// php code start



$condition1 = true;
$condition2 = false;
$condition3 = false;
if($condition1){
    if($condition2){
        if($condition3){
            echo "Hello";
        }else {
            echo "no 1";
        }
    }else {
        echo "no 2";
    }
}else {
    echo "no 3";
}

echo "\n<br>";

// php code or any kind of code should be readable


if ($condition1 && $condition2 && $condition3) {
    echo "Hello";
}elseif($condition1 && $condition2) {
    echo "no 1";
}elseif($condition1) {
    echo "no 2";
}else {
    echo "no 3";
}


// php end
</xmp>



<?php
echo "<h2>Result</h2>\n";
// php code start
$condition1 = true;
$condition2 = false;
$condition3 = false;
if($condition1){
    if($condition2){
        if($condition3){
            echo "Hello";
        }else {
            echo "no 1";
        }
    }else {
        echo "no 2";
    }
}else {
    echo "no 3";
}

echo "\n<br>";

// php code or any kind of code should be readable

if ($condition1 && $condition2 && $condition3) {
    echo "Hello";
}elseif($condition1 && $condition2) {
    echo "no 1";
}elseif($condition1) {
    echo "no 2";
}else {
    echo "no 3";
}
// php end
?>




