<?php
$array = [2,4,2,5,7,4,3,5,2];
$a = 2;
$count = 0;
for($i = 0; $i < count($array); $i++){
    if($array[$i] == $a){
        $count += 1;
    }
} 
echo $count;
?>