<?php
$array = [1,2,3,4,5,6,7,8,9];
$del_value = 7;
$index_del = array_search($del_value, $array);
var_dump($index_del);
if ($index_del !== false) {
    // array_splice($array, $index_del, 1);
    for ($i = $index_del; $i < count($array); $i++) {
        $array[$i] = $array[$i+1] ?? null;
    }
    unset($array[count($array) - 1]);
    echo '<pre>';
    echo "new value: ";
    print_r($array);
    echo '</pre>';
}
else{
    "Không tìm thấy số " . $del_value;
}
?>