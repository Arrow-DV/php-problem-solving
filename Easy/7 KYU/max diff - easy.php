<?php
function maxDiff(array $list): int{
    if(count($list) == 0 ){
        return 0;
    }
    else{
        $max_element = max($list);
        $min_element = min($list);
        return $max_element - $min_element;
    }
}