<?php
if( !function_exists('pr') ){
    function pr($data) {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}

if( !function_exists('dd') ){
    function dd($data) {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        die();
    }
}