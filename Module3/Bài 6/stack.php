<?php
$q = new splStack();
$q ->push("trung");
$q -> push("hung");
$q -> push("tam");

// echo $q->pop();

// echo '<pre>';
// print_r($q);
// echo '</pre>';
//Đưa con trỏ về vị trí ban đầu

$q->rewind();
//
while($q->valid()){
    echo $q->current();
    $q->next();
}
