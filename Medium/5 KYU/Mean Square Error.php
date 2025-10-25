<?php


function solution(array $a, array $b): float {
    
    $result = 0 ;
    for($i = 0 ; $i < count($a) ; $i ++ ){
        $result += abs($a[$i] - $b[$i]) ** 2;
        
    }
    return $result / count($a);
}