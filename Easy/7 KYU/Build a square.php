<?php

function generateShape(int $n): string
{
    $result = "";
    if($n == 1) {return '+';}
    for ($j = 0; $j < $n; $j++) {
        for ($i = 0; $i < $n; $i++) {
            $result .= "+";
        }
        $result .= "\n";
    }
    return substr($result,0,strlen($result) -1 );
  }
