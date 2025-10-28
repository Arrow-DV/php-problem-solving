<?php

function find_missing_letter(array $array): string {
    $range_a_to_z = range($array[0],end($array));
    
    return join(array_diff($range_a_to_z,$array));
}