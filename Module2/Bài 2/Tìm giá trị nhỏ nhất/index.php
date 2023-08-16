<?php
function findMinIndex($arr) {
    $min = $arr[0];
    $index = 0;
    for($i = 1; $i < count($arr);$i++){
        if ($arr[$i] < $min){
            $min = $arr[$i];
            $index = $i;
        }
    }
    return $index;
} 
$arr = [4,5,2,3,6,7,8];
$minIndex = findMinIndex($arr);
echo "Vị trí của phần tử nhỏ nhất " . $minIndex;
?>