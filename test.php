<?php
$num1 = "Number 1";
$num2 = "Number 2";
$num3 = "Number 3";
$num4 = "hai";

for ($i = 1; $i <=3; $i++) {
    $num = 'num' . $i;
    echo ${$num} . "<br>";
}

$nums = array($num1,$num2,$num3,$num4);
$count = count($nums);
for ($i = 0; $i <$count; $i++) {

    echo  $nums[$i] . "<br>";
}
?>