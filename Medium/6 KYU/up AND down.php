<?php

function arrange($s) {
    $words = explode(" ", $s);
    $n = count($words);

    for ($i = 0; $i < $n - 1; $i++) {
        if ($i % 2 == 0) {
            if (strlen($words[$i]) > strlen($words[$i + 1])) {
                $temp = $words[$i];
                $words[$i] = $words[$i + 1];
                $words[$i + 1] = $temp;
            }
        }
        else {
            if (strlen($words[$i]) < strlen($words[$i + 1])) {
                $temp = $words[$i];
                $words[$i] = $words[$i + 1];
                $words[$i + 1] = $temp;
            }
        }
    }

    for ($i = 0; $i < $n; $i++) {
        if ($i % 2 == 0) {
            $words[$i] = strtolower($words[$i]);
        } else {
            $words[$i] = strtoupper($words[$i]);
        }
    }

    return implode(" ", $words);
}

