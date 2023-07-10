<?php
$q = new splQueue();
$q ->enqueue("trung");
$q -> enqueue("hung");
$q -> enqueue("tam");

// echo $q->pop();

// echo '<pre>';
// print_r($q);
// echo '</pre>';
//Đưa con trỏ về vị trí ban đầu

$q->rewind();
//
while($q->valid()){
    echo '<br>'. $q->current();
    $q->next();
}