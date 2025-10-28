<?php

function duplicateCount($text) {
    $str = strtolower($text);
    $str = count_chars($str);
    $counted_more_than_one = array_filter($str,function($count){
        return $count > 1;
    });
    return count($counted_more_than_one) ;
}
