<?php 
// Bước 1: Tạo 2 mảng số nguyên cho trước
$array1 = array(1, 2, 3);
$array2 = array(4, 5, 6);

// Bước 2: Tạo mảng thứ 3 rỗng.
$array3 = array();

// Bước 3: Gộp mảng
foreach ($array1 as $value) {
    $array3[] = $value;
}

foreach ($array2 as $value) {
    $array3[] = $value;
}

// Bước 4: In kết quả
echo '<pre>';
print_r($array3);
echo '</pre>';
?>