<?php
$n = [
    [1,2,3],
    [4,2,3],
    [1,2,4]
];
//00 - 11 - 22

$sum = 0;
for($i = 0; $i < count($n); $i++){
    $sum += $n[$i][$i];
}
echo "Tổng của đường chéo của matrix là: $sum";
?>