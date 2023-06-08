<?php
$array = [
    [2,4,6,3,5,7],
    [5,4,3,1,6,8]
];
$max = $array[0][0];
for($i = 0;$i < count($array);$i++){
    for($j = 0;$j < count($array[$i]);$j++){
        if($array[$i][$j] > $max){
            $max = $array[$i][$j];
        }
    }
}
echo "Giá trị lớn nhất của mảng là: " . $max;
?>