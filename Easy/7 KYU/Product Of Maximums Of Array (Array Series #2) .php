<?php

function maxProduct($arr, $n) {
    $result = 1;
    for($i = 0 ; $i < $n ; $i++){
        $max_element = max($arr);
        $result *= $max_element;
        unset($arr[array_search($max_element,$arr)]);
    }

    return $result;
}