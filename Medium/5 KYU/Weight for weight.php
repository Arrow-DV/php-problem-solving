<?php

function orderWeight($str) {
    $arr = explode(' ', trim($str));
    usort($arr, function($a, $b) {
        $wa = array_sum(str_split($a));
        $wb = array_sum(str_split($b));
        if ($wa == $wb) {
            return strcmp($a, $b);
        }
        return $wa <=> $wb;
    });
    return implode(' ', $arr);
}
