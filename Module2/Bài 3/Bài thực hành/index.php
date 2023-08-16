<?php
function findMin($arr){
    $min = $arr[0];
    for($i= 1 ;$i < count($arr);$i++){
        if($arr[$i] < $min){
           $min = $arr[$i];
        }
    }  
    return $min;
}
function findMax($arr){
    $max = $arr[0];
    for($i= 1;$i < count($arr);$i++){
        if ($arr[$i] > $max){
            $max = $arr[$i];
        }
    }
    return $max;
}
$num = [-2, 0, 5, 7, 9, -5, 30, 100];
foreach($num as $num){
    echo $num . "";
}
$minValue = findMin($num);
$maxValue = findMax($num);
echo "<br>";
echo "Giá trị nhỏ nhất là: " . $minValue;
echo "<br>";
echo "Giá trị lớn nhất là: " . $maxValue;
?>