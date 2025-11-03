<?php


function camel_case(string $s): string {
        $result = "";
        $words = explode(" ",$s);
        foreach($words as $word){
            $word = ucfirst($word);
            $result .= $word;
        }
    return $result;
}