<?php



function toWeirdCase($string) {
    $result = [];
    $words = explode(" ",$string);
    foreach($words as $word){
        $word= strtoupper($word);
        for($i = 0 ; $i < strlen($word);$i++){
            if($i % 2 != 0){
                $word[$i] = strtolower($word[$i]);
            }
        }
        $result[] = $word;
    }
    return join(" ",$result);
}