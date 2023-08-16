<?php
$pattern = '/^[C|A|P][0-9]+[G|H|I|K|L|M]$/';
$ten = "C0318G";
$ten1 = "P0323A";
if(preg_match($pattern,$ten1)){
    echo "Tên hợp lệ";
}
else{
    echo "Tên không hợp lệ";
}
?>