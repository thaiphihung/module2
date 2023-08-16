<?php
function countValue($arr, $value){
    $x = 0;
    for ($i = 0; $i < count($arr); $i++){
        if ($arr[$i] == $value){
            $x += 1;
        }
    }
    return $x;
}

$num = [3,2,1,5,4,3,5,6,3,8,7];
$value = 3;

$count = countValue($num, $value);
echo "Số lần xuất hiện của $value là: " . $count;
