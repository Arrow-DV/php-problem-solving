<?php
define("CHUNK_SIZE",2);
function solution($str) {
    $result = [];
    $tempChunk = "";
    for($i = 0 ; $i < strlen($str);$i++){
        $tempChunk .= $str[$i];
        if(strlen($tempChunk) == CHUNK_SIZE ){
            $result[] = $tempChunk;
            $tempChunk = "";
        }
    }
    if(strlen($tempChunk) == 1){
        $tempChunk .= "_";
        $result[] = $tempChunk;
    }
    return $result;
}